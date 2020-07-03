<?php

namespace App\Model;

use App\Model\Menu\Permission;
use App\Model\Menu\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable
{
    use  Notifiable;

    protected $guard  = 'admin';

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'role_id',
        'profile',
        'mobile',
        'address',
        'status'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeGetAdmins()
    {
        return Admin::where('status', 'a')->orderBy('id', 'asc')->get();
    }
    public function setPasswordAttribute($val)
    {
        $this->attributes['password'] = Hash::make($val);
    }
}
