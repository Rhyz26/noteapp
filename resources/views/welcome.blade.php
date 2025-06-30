<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - Note Taking App</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center">Welcome to the Note Taking App</h1>
        <div class="mt-6 text-center">
            @if (Route::has('login'))
            @auth
            <a href="{{ route('notes.index') }}" class="btn btn-primary">Go to Notes</a>
            @else
            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-primary ml-4">Register</a>
            @endif
            @endauth
            @endif
        </div>
    </div>
</body>

</html>