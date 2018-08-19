<div class="card">
    <div class="card-block">
        <form method="POST" action="/posts/{{ $post->id }}/comments">
            <div class="form-group">
                <textarea name="body" id="body" class="form-control" placeholder="Your comment here." required></textarea>
            </div>

            {{ csrf_field() }}

            @include('layouts.partials.errors')

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
    </div>
</div>
