<div class="card">
    <div class="card-body">
        <a href="{{ route('post.show', $post->slug) }}"><h4 v-pre class="card-title">{{ $post->title }}</h4></a>

        <p class="card-text">{{ $post->content }}</p>

        <p class="card-text">
            <small class="text-muted">{{ $post->user->email }} || {{ $post->user->name }}</small><br>
            <small class="text-muted float-right">
                <i class="fa fa-comments-o" aria-hidden="true"></i> {{ count($post->comment) }}
            </small>
        </p>
    </div>
</div>
