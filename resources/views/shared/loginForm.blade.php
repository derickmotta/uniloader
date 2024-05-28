
{{-- Register form --}}

<div>
    <form action="{{ route('login') }}" method="post">
        @csrf

        <label for="email">Email</label>
        <input type="text" name="email" value="{{old('email')}}">

        <label for="password">Password</label>
        <input type="password" name="password">

        <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember me</label>
        </div>

        @error('failed')
            {{ $message }}
        @enderror

        <button>Login</button>

    </form>
</div>
