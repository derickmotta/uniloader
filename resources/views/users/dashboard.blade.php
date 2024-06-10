<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/styles.css") }}">
    <title>{{ config('app.name') }}</title>
    <link class="favicon" rel="icon" href="{{ asset("images/icon/favicon-white.png") }}" type="image/x-icon" media="(prefers-color-scheme: dark)">
    <link class="favicon" rel="icon" href="{{ asset("images/icon/favicon-black.png") }}" type="image/x-icon" media="(prefers-color-scheme: light)">
</head>

<body>

    <header>

        <div class="logo-header">
            <img src="{{ asset("images/dowloader-logo-white.webp") }}" alt="logoheader" width="90px" height="auto">
        </div>

        @include("shared.header")

    </header>


    <section>

        <p>You are on a restrict member area!</p>
        
        <h2>Welcome back, {{ auth()->user()->name }} </h2>

        <img src="{{ asset("images/logo_loading.webp") }}" alt="logo-home" width="290px" height="auto">
        <p>Paste the url where video is located. We do the rest for you...</p>


        {{-- CONSERTAR DESIGN DO INPUT E BOTAO !!! (NAO ESTÁ FUNCIONANDO A ESTILIZAÇÃO) --}}

        @include("shared.downloadForm")

    </section>

</body>
</html>
