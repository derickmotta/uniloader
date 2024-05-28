</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | Register</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        @include('shared.header')
    </header>

    <main>
        <div class="content">
            @include('shared.registerForm')
        </div>
    </main>

</body>
</html>
