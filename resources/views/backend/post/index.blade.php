@extends('layouts.backend_app')
@section('title', 'List of Post')

@section('content')

<div class="box box-success">
    <div class="box-header with-border">
        <div class="row">
            <form action="{{ route('post.index') }}" method="get" class="form-row col-12 no-padding pl-1">
                <div class="form-row col-4">
                    <div class="col-5 pl-3 no-padding">
                        <select name="field_name" class="form-control form-control-sm">
                            <option value="">Select one</option>
                            <option value="title">Title</option>
                            <option value="content_type">Content Type</option>
                        </select>
                    </div>
                    <div class="col-6 no-padding">
                        <input type="text" name="value" class="form-control form-control-sm" placeholder="Type your text" />
                    </div>
                    <div class="col-1 no-padding">
                        <button type="submit" class="btn btn-sm btn-success">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="box-tools pull-right">
            <a href="{{route('post.create')}}" class="btn btn-xs btn-success pull-left text-white" title="Add New"><i class="fa fa-plus"></i> <span class="text-capitalize">Add Post</span></a>
        </div>

    </div>

    <!-- /.box-header -->
    <div class="box-body box-min-height">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped list-data">
                <thead class="bg-purple text-white">
                    <tr>
                        <th class="serial">#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Content Type</th>
                        <th>Section</th>
                        <th class="action">Publishd</th>
                        <th class="action">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @php $count = 0 @endphp
                    @forelse($datas as $item)

                    <tr>
                        <td>{{ $count + $datas->firstItem() }}</td>
                        <td>{{$item->title}}</td>
                        <td>
                            <img src="{{ asset('storage/'.$item->image) }}" height="50" width="60">
                        </td>
                        <td>{{ $item->content_type }}</td>
                        <td>Section {{ $item->show_section }}</td>
                        <td class="action">
                            @if($item->publish)
                            YES
                            @else
                            NO
                            @endif
                        </td>

                        <td class="action">
                            <form action="{{route('post.destroy', $item->id)}}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @php $count++ @endphp
                    @empty
                    <tr>
                        <td colspan="5" align="center">
                            No post available, create one
                        </td>
                    </tr>
                    @endforelse

                </tbody>

            </table>
        </div>
    </div>
    <div class=" box-footer clearfix">
        <div class="row mx-0">
            <div class="col-sm-12 col-md-5 px-0">
                <div role="status" aria-live="polite">Showing
                    {{$datas->firstItem()}} to
                    {{$datas->lastItem()}} of
                    {{$datas->total()}} entries
                </div>
            </div>
            <div class="col-sm-12 col-md-7 p-0 ">
                <div class="float-right">{{$datas->links()}}</div>
            </div>
        </div>
    </div>
</div>

@endsection