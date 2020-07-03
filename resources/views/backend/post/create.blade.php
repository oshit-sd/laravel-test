@extends('layouts.backend_app')
@section('title', 'Create Post')

@section('content')

<div class="box box-success">

    <div class="box-header with-border">
        <h3 class="box-title">Post Create</h3>
        <div class="box-tools pull-right">
            <a href="{{route('post.index')}}" class="btn btn-xs btn-success pull-left text-white router-link-active" title="Add New">
                <i class="fa fa-arrow-left"></i>
                <span>Back</span>
            </a>
        </div>
    </div>

    <div class="box-body box-min-height">
        <div class="row">

            <form class="form-row col-12" enctype="multipart/form-data" method="POST" action="{{route('post.store')}}">
                @csrf
                <div class="col-3">
                    <div class="form-group">
                        <label for="inputRole" class="control-label">Title</label>
                        <input type="text" name="title" placeholder="Title" class="form-control form-control-sm" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="inputRole" class="control-label">Image</label>
                        <input type="file" name="image" class="form-control form-control-sm" />
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="inputRole" class="control-label">Content Type</label>
                        <select name="content_type" class="form-control form-control-sm content-section">
                            <option value="">Select type</option>
                            <option value="video">Video</option>
                            <option value="post">Post</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-3">
                    <label>Status</label>
                    <div class="row mt-2">
                        <div class="col-4">
                            <input type="radio" name="publish" checked value="1" /> Publish
                        </div>
                        <div class="col-6">
                            <input type="radio" name="publish" value="0" /> Unpublish
                        </div>
                    </div>
                </div>
                <div class="col-3 video-section" style="display:none">
                    <div class="form-group">
                        <label for="inputRole" class="control-label">Video URL</label>
                        <input type="text" name="video_url" placeholder="Video URL" class="form-control form-control-sm" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="inputRole" class="control-label">Description</label>
                        <textarea name="description" placeholder="Description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="inputRole" class="control-label">Show Section</label>
                        <select name="show_section" class="form-control form-control-sm">
                            <option value="">Select type</option>
                            <option value="1">Section 1</option>
                            <option value="2">Section 2</option>
                        </select>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <button type="submit" class="btn btn-info btn-sm">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

<script>
    $('.content-section').on('change', function() {
        let ct = $('.content-section').val();
        if (ct == 'video') {
            $('.video-section').show();
        } else {
            $('.video-section').hide();
        }
    });
</script>

@endsection