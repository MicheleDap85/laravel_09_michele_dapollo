<x-layout :title="'Tutti gli articoli - DEVolution'">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="mb-1">Tutti gli articoli</h1>
            <p class="text-muted mb-0">
                Il mio cammino di formazione da developer, un passo alla volta.
            </p>
        </div>

        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
            ← Home
        </a>
    </div>

    @if(empty($articles))
        <div class="alert alert-info">
            Nessun articolo disponibile al momento.
        </div>
    @else
        <div class="row g-4">
            @foreach($articles as $article)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h2 class="h5 card-title mb-2">
                                {{ $article['title'] }}
                            </h2>

                            <img src="{{ Storage::url($article->img) }}" alt="{{ $article['title'] }}" class="img-fluid mb-3"
                            class="img-fluid rounded-4 shadow-sm w-100"
                            style="max-height: 420px; object-fit: cover;">
                            
                            <p class="card-text text-muted flex-grow-1">
                                {{ $article['excerpt'] }}
                            </p>

                            <a href="{{ route('articles.show', $article['slug']) }}"
                               class="btn btn-primary mt-2">
                                Leggi
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

</x-layout>
