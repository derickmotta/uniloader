
{{-- Register form --}}

<div>

    <form action="{{ route("register") }}" method="POST">

        @csrf

        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>
        <h1>Creating your account </h1>

        <input type="text" name="name" id="name" placeholder="Username" value="{{old('name')}}">
        <div class="username-line"></div>
        @error('name')
            {{ $message }}
        @enderror


        <input type="text" name="email" id="email" placeholder="E-mail" value="{{old('email')}}">
        <div class="email-line"></div>
        @error('email')
            {{ $message }}
        @enderror

        <input type="password" name="password" id="password" placeholder="Password">
        <div class="password-line"></div>
        @error('password')
            {{ $message }}
        @enderror


        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
        <div class="confirm-password-line"></div>

        <button id="botao" onclick="enviar()">Register</button>

    </form>
    {{-- <form action="{{ route('register') }}" method="post">
        @csrf

        <label for="name">Username</label>
        <input type="text" name="name" value="{{old('name')}}">
        @error('name')
            {{ $message }}
        @enderror

        <label for="email">Email</label>
        <input type="text" name="email" value="{{old('email')}}">
        @error('email')
            {{ $message }}
        @enderror

        <label for="password">Password</label>
        <input type="password" name="password">
        @error('password')
            {{ $message }}
        @enderror

        <label for="password_confirmation">Confirm password</label>
        <input type="password" name="password_confirmation">

        <button>Register</button>

    </form> --}}
</div>
