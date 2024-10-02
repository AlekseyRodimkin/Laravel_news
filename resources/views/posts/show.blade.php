@extends('layouts.app')

@section('title', $post->title)

@section('content')
     <div class='row'>
            <div class='col-lg-9 col-md-8'>
                <div class="row justify-content-center">
                    <div class="bg-white shadow-2xl rounded-lg d-flex flex-row overflow-hidden">
                        <div class="flex-shrink-0">
                            <img src="/storage/posts/dab2d68a0ac0cca114ea732da6162a5e.png" alt="Thumbnail" class="img-fluid" style="max-width: 300px; height: auto;">
                        </div>
                        <div class="p-4">
                            <h2 class="font-bold text-2xl text-gray-800">Prof. Kobe Gerlach</h2>
                            <p class="text-gray-700 my-3">
                                Voluptas iusto est deserunt facere molestiae molestias. At at soluta doloribus illo iusto.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class='col-lg-3 col-md-4'>
                <section class="rounded-b-lg mt-4">
                    <form method="POST" action="">
                        <input type="hidden" name="_token" value="mVgA35H56slkjuMexqK1k9cmuAeEz1YV7d9JggSk">
                        <textarea name="text" class="form-control mb-4" rows="3" placeholder="Ваш комментарий..." spellcheck="false"></textarea>
                        <button type="submit" class="btn btn-primary w-100">Написать</button>
                    </form>

                    <div id="task-comments" class="pt-4">
                        <!-- comments -->
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
