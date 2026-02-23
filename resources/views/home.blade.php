<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-layout>

    @if(session()->has('emailSent'))
    <div class="alert alert-success">
        {{ session('emailSent') }}
    </div>
    @endif
    @if(session()->has('emailError'))
    <div class="alert alert-danger">
        {{ session('emailError') }}
    </div>
    @endif

    @if(session()->has('articleCreated'))
    <div class="alert alert-success">
        {{ session('articleCreated') }}
    </div>
    @endif

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">

            <h1 class="display-5 fw-bold">
                DEVolution 🚀
            </h1>

            <p class="col-md-8 fs-5">
                Racconto il mio percorso nel mondo dello sviluppo:
                errori, scoperte, codice e crescita continua.
            </p>

            <a href="{{ route('articles.index') }}"
               class="btn btn-primary btn-lg">
                Entra nel blog
            </a>

        </div>
    </div>

</x-layout>

   
</body>
</html>