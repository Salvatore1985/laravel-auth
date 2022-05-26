@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">
                    {{ $post->title }}
                </h1>
                <h4>
                    {{ $post->user_id }}
                </h4>
                <h4>
                    {{ $post->created_at }}
                </h4>
            </div>
            <div class="col-12">
                <img src="{{ $post->image_url }}" alt="image{{ $post->title }}">
            </div>
            <div class="col-12 mt-2">
                {{ $post->content }}
            </div>
        </div>
    </div>
@endsection
