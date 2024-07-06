<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
</head>
<body>
    <h1>About Me</h1>
    <p>Name: {{ $name }}</p>
    <p>Age: {{ $age }}</p>
    <p>Birthdate: {{ $birthdate }}</p>
    <p>Location: {{ $location }}</p>
    <nav>
    <a href="{{ route('about-me') }}">About Me</a>
    <a href="{{ route('skills') }}">Skills</a>
    <a href="{{ route('hobbies') }}">Hobbies</a>
    </nav>
</body>
</html>
