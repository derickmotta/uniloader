@guest

<nav>
    <ul>
        <li><a href="{{ route("home") }}">Home</a></li>
        <li><a href="{{ route("login") }}">Sign in</a></li>
        <li><a href="{{ route("register") }}"><button>Sign up</button></a></li>
    </ul>
</nav>


@endguest

@auth

<nav>
    <ul>
        <li><a href="{{ route("home") }}">Home</a></li>
        <li><a href="#">My Account</a></li>
        <li><a href="#"><button>Logout</button></a></li>
    </ul>
</nav>


@endauth
