    <div class="card h-100 shadow-sm" style="height: 200px;">
        <div class="d-flex" style="height: 100%;">
            <a href="{{ route('posts.show', $post->id) }}" class="flex-shrink-0" style="width: 150px; height: 100%;">
                <img src="/storage/posts/{{ $post->thumbnail }}" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover;" alt="{{ $post->title }}">
            </a>

            <div class="card-body d-flex flex-column justify-content-between" style="overflow: hidden; width: 100%;">
                <a href="{{ route('posts.show', $post->id) }}" class="text-decoration-none">
                    <h5 class="card-title text-dark" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                        {{ $post->title }}
                    </h5>
                </a>
                <p class="card-text text-muted" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; max-height: 3.6em; line-height: 1.2em;">
                    {!! $post->preview !!}
                </p>
            </div>
        </div>
    </div>
