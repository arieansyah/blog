<h2 class="mt-2"> <i class="fa fa-comments-o" aria-hidden="true"></i> Comment {{ count($show->comments) }}</h2>

@foreach($show->comments as $comment)
<div class="display-comment" style="margin-left:40px;">
    <i class="fa fa-comments-o" aria-hidden="true"></i> <strong>{{ $comment->name }}</strong>
    ({{ ($comment->user) ? 'registered' : 'not registered' }})
    <p>{{ $comment->description }}</p>
</div>
@endforeach
