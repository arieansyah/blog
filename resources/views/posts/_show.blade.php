<div class="card">
    <div class="card-body">
        <h4 v-pre class="card-title">{{ $post->title }}</h4>

        <p class="card-text">{{ $post->content }}</p>

        <p class="card-text">
            <small class="text-muted">{{ $post->user->email }}</small><br>
            <small class="text-muted">
                <i class="fa fa-comments-o" aria-hidden="true"></i> {{ $post->user->name }}
            </small>
        </p>
    </div>
</div>
