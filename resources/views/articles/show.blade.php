<x-layout :title="$article->title">
    <article class="mx-auto" style="max-width: 750px;">

        <a href="{{ route('articles.index') }}"
           class="btn btn-outline-secondary mb-4">
            ← Torna agli articoli
        </a>

        @if(!$article->img)
        <img
                src="https://picsum.photos/200/300"
                alt="{{ $article->title }}"
                class="img-fluid mb-3"
                style="max-height: 420px; object-fit: cover;"
            >
        @else
            <img
                src="{{ Storage::url($article->img) }}"
                alt="{{ $article->title }}"
                class="img-fluid mb-3"
                style="max-height: 420px; object-fit: cover;"
            >
        @endif

        <h1 class="fw-bold mb-3">
            {{ $article->title }}
        </h1>

        <p class="lead text-muted mb-4">
            {{ $article->excerpt }}
        </p>

        <div class="article-content">
            @foreach (explode("\n\n", $article->content) as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        </div>

    </article>

</x-layout>