<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/sign_in.css") }}">
    <title>{{ config('app.name') }}</title>
    <link class="favicon" rel="icon" href="{{ asset("images/icon/favicon-white.png") }}" type="image/x-icon" media="(prefers-color-scheme: dark)">
    <link class="favicon" rel="icon" href="{{ asset("images/icon/favicon-black.png") }}" type="image/x-icon" media="(prefers-color-scheme: light)">
</head>
<body>

<header>

        <div class="logo-header">
            <a href="{{ route("home") }}"><img src="{{ asset("images/dowloader-logo-white.webp") }}" alt="logoheader" width="90px" height="auto"></a>
        </div>
        @include("shared.header")
</header>
<form action="{{ route('login') }}" method="post">
    @csrf
    <section>

            <h2>Enter in your account</h2>
            <input type="email" name="email" placeholder="E-mail" class="emaill">
            <input type="password" name="password" placeholder="Password" class="passwordd">

            <label class="checkbox-container">
                <input type="checkbox">
                <span class="checkmark">Remember me</span>
            </label>

            <button>Login</button>
    </section>
</form>
</body>
</html>
