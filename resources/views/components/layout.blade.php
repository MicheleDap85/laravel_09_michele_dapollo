<!Doctype html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DEVolution del developer</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar />

  <main class="container py-4">
    {{ $slot }}
  </main>
    <x-footer />
</body>
</html>
