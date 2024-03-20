<!DOCTYPE html>
<html>
<head>
    <title>Contact Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<header>
    <nav>
        <a class='btn btn-primary' href="{{route('profile')}}">Profile</a>
        <a class='btn btn-primary' href="{{route('contact')}}">Contact</a>
    </nav>
</header>
<main>
    <h1>My profile</h1>
    <h2><?php echo $name; ?></h2>
    <h2>{{$id}}</h2>
    <table>
        @foreach ($students as $student)
            <tr><td>{{$student}}</td></tr>
        @endforeach
    </table>
</main>
</body>
</html>