<!DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>{{ config('app.name') }}</title>
            <link rel="stylesheet" href="{{ asset("css/sign_up.css") }}">
            <link class="favicon" rel="icon" href="{{ asset("images/icon/favicon-white.png") }}" type="image/x-icon" media="(prefers-color-scheme: dark)">
            <link class="favicon" rel="icon" href="{{ asset("images/icon/favicon-black.png") }}" type="image/x-icon" media="(prefers-color-scheme: light)">
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700 ;0.800;0.900;1.100;1.200;1.300;1.400;1.500;1.600;1.700;1.800;1.900&display=swap');

                body{
                    font-family: 'poppins', sans-serif;
                    margin: 0;
                }
            </style>
        </head>
    <body>

 <header>

    <div class="logo-header">
        <img src="{{ asset("images/dowloader-logo-white.webp") }}" alt="logoheader" width="90px" height="auto">
    </div>

    @include('shared.header')
</header>

    <section>
        @include("shared.registerForm")
    </section>
            <script src="{{ asset("scripts/script.js") }}">
            </script>
    </body>
</html>
