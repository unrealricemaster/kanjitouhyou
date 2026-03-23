<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $header }}</title>
    @vite('resources/js/app.js')
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="border-b-red-700">
        <h1></h1>
    </div>
    <header>
        <h1 class="text-green-600 uppercase">漢字投票のサイトへようこそ！</h1>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <p>Footer!</p>
    </footer>
</body>
</html>