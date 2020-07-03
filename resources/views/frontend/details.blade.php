@extends('layouts.frontend_app')

@section('content')

<div class="row">
    <!-- Blog Entries Column -->
    <div class="col-md-12">
        <!-- Blog Post -->
        <div class="card mb-4 mt-4">
            <div class="card-header">
                {{ $post->title??"" }}
                <small>{{ Carbon\Carbon::parse( $post->created_at )->diffForHumans() }}</small>
            </div>
            <div class="card-body d-flex justify-content-center">
                <div class="row col-10">
                    @if($post->content_type == 'post')
                    <img src="{{ asset('storage/'.$post->image) }}" style="height:400px; width:100%;">
                    @else
                    <iframe class="iframe" width="100%" height="400" src="https://www.youtube.com/embed/{{ $post->video_url }}" frameborder="0" allowfullscreen></iframe>
                    @endif
                    <p class="mt-3" style="font-size: 13px;">{{ $post->description??"" }}</p>
                </div>
            </div>

            <div class="card-footer text-muted">
                Share With :

                <a href="https://www.facebook.com/" target="_blank" class="icon facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://www.google.com/" target="_blank" class="icon google">
                    <i class="fa fa-google"></i>
                </a>
                <a href="https://twitter.com/" target="_blank" class="icon twitter">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="icon instagram">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    .icon {
        padding: 3px 6px;
        border: 1px solid;
        text-align: center;
        margin: 0px 5px;
        border-radius: 5px;
    }

    .google {
        color: #ea4436
    }

    .instagram {
        color: #c90081
    }

    .twitter {
        color: #58aee7
    }
</style>

@endsection