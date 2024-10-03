<div class="col-md-6 mb-4">
    <div class="card h-100 shadow-sm">
        <div class="d-flex">
            <a href="{{ route('posts.show', $post->id) }}" class="flex-shrink-0" style="width: 150px;">
                <img src="/storage/posts/{{ $post->thumbnail }}" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover;" alt="{{ $post->title }}">
            </a>

            <div class="card-body d-flex flex-column justify-content-center">
                <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">
                    <h5 class="card-title text-dark">{{ $post->title }}</h5>
                </a>
                <p class="card-text text-muted text-truncate" style="max-height: 3.6em; line-height: 1.2em;">
                    {!! $post->preview !!}
                </p>
            </div>
        </div>
    </div>
</div>
