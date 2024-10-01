<div class="col-md-3 mb-4">
    <div class="card h-100 shadow-sm" style="border-radius: 20px; overflow: hidden;">
        <a href="{{ route('posts.show', $post->id) }}">
            <img src="/storage/posts/{{ $post->thumbnail }}" class="card-img-top" alt="{{ $post->title }}">
        </a>
        <div class="card-body">
            <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">
                <h5 class="card-title text-dark">{{ $post->title }}</h5>
            </a>
            <p class="card-text text-muted">
                {!! $post->preview !!}
            </p>
        </div>
        <div class="card-footer bg-white">
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-block btn-sm">Читать дальше</a>
        </div>
    </div>
</div>
