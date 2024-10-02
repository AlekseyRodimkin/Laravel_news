<div class="col-md-6 mb-4">
    <div class="card h-100 shadow-sm" style="border-radius: 20px; overflow: hidden; height: 200px;">
        <div class="d-flex">
            <a href="{{ route('posts.show', $post->id) }}" class="flex-shrink-0" style="width: 150px;">
                <img src="/storage/posts/{{ $post->thumbnail }}" class="h-100 w-100" style="object-fit: cover; border-radius: 20px 0 0 20px;" alt="{{ $post->title }}">
            </a>

            <div class="card-body d-flex flex-column justify-content-center" style="flex-grow: 1;">
                <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">
                    <h5 class="card-title text-dark">{{ $post->title }}</h5>
                </a>
                <p class="card-text text-muted" style="overflow: hidden; text-overflow: ellipsis; max-height: 3.6em; line-height: 1.2em;">
                    {!! $post->preview !!}
                </p>
            </div>
        </div>
    </div>
</div>
