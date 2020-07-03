<?php

/**
 * Dev: @Oshit Sutra Dhar
 */

namespace App\Http\Controllers\Auth;

use Auth;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($this->validateCheck($request)) {
                $email = $request->email;
                // check email / user===========
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) :
                    $arr = [
                        'email'     => $email,
                        'password'  => $request->password,
                        'status'    => 'a'
                    ];
                else :
                    $arr = [
                        'username'  => $email,
                        'password'  => $request->password,
                        'status'    => 'a'
                    ];
                endif;

                $admin = Admin::where('email', $email)->first();
                if (!empty($admin)) {
                    if ($admin->block == 0) {
                        if (Auth::guard('admin')->attempt($arr, $request->remember)) {
                            Session::forget($email);
                            return redirect('/admin/dashboard')->with(['success' => "Login Successfully"]);
                        } else {
                            $attempt = $this->attemptAdmin($admin->id, $email);
                            if ($attempt <= 3 && $attempt != 0) {
                                $msg =  "There are " . $attempt . " attempts left";
                            } else if ($attempt == 0) {
                                $msg =  "Your account is block, plese contact your administrator";
                            } else {
                                $msg =  "Your Login Information is Wrong";
                            }
                            return redirect('/admin/loginme')->with(['success' => $msg]);
                        }
                    } else {
                        Session::forget($email);
                        return redirect('/admin/loginme')->with(['error' => "Your account is block, plese contact your administrator"]);
                    }
                } else {
                    return redirect('/admin/loginme')->with(['error' => "Email does not match our records!"]);
                }
            }
        } else {
            return view('auth.admin_login');
        }
    }

    private function attemptAdmin($id, $email)
    {
        $count  = Session::get($email) ?? 0;
        $inc    = $count + 1;
        Session::put($email, $inc);

        $attempt = 6 - $inc;
        if ($attempt == 0) {
            Session::forget($email);
            Admin::where('id', $id)->update(['block' => 1]);
        }
        return $attempt;
    }


    /**
     * Validation check====
     */
    public function validateCheck($request)
    {
        // return $request->validate([
        //     "email"     => "required",
        //     "password"  => "required"
        // ]);

        return $this->validate($request, [
            "email"     => "required",
            "password"  => "required"
        ]);
    }

    public function logout()
    {
        $logout = Auth::guard('admin')->logout();
        return redirect('/admin/loginme')->with(['success' => "Logout Successful"]);
    }
}
