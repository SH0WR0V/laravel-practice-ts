<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav>
            <br>
            <a class='btn btn-primary' href="{{ route('registration') }}">Registration</a>
            <a class='btn btn-primary' href="{{ route('profile') }}">Profile</a>
            <a class='btn btn-primary' href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>
    <br>

    @yield('content')

    <br>
    <h6>Copyright all rights reserved</h6>
</body>

</html>
