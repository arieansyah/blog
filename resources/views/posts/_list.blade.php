<div class="card-columns">
    @each('posts/_show', $post, 'post', 'posts/_empty')
</div>

<div class="d-flex justify-content-center">
    {{-- {{ $posts->links() }} --}}
</div>
