
{{-- Register form --}}

<div>
    <form action="{{ route('register') }}" method="post">
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

    </form>
</div>
