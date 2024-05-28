</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@auth

    <header>
        @include('shared.header')
    </header>

    <main>
        <div class="content">
            <h1>Welcome back, {{ auth()->user()->name }} </h1>
            <img src="{{ asset('images/logo_loading.webp') }}" alt="Logo is loading..." class="logo">
            @include('shared.downloadForm')
        </div>
    </main>

@endauth

@guest
    <header>
        @include('shared.header')
    </header>

    <main>
        <div class="content">
            <h1>You are not logged in!</h1>
            <img src="{{ asset('images/logo_loading.webp') }}" alt="Logo is loading..." class="logo">
            @include('shared.downloadForm')
        </div>
    </main>
@endguest
</body>
</html>


