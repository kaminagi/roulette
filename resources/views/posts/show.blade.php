@extends('layouts.master')

@section('content')
    @include('posts.post')

    <hr/>

    <div class="comments">
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}:
                    </strong>
                    {{ $comment->body }}

                </li>
            @endforeach
        </ul>
    </div>

    <hr />

    @include('posts.addComment')
@endsection
