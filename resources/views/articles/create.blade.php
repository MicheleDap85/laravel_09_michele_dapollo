<x-layout>
    <div class="container-fluid bg-light py-5 mb-5">
        <div class="row justify-content-center">
            <h1 class="mb-4">Crea un nuovo articolo</h1>
        </div>
        <div class="row">
            <form method="POST" action="{{ route('articles.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Inserisci il titolo</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Inserisci lo slug</label>
                    <input type="text" name="slug" class="form-control" id="slug" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="excerpt" class="form-label">Inserisci l'estratto</label>
                    <input type="text" name="excerpt" class="form-control" id="excerpt" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Scrivi qui il tuo articolo</label>
                    <textarea name="content" id="content" class="form-control"></textarea>
                </div>
                    <button type="submit" class="btn btn-primary">Invia articolo</button>
            </form>
        </div>
    </div>
</x-layout>