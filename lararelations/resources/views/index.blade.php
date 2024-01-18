<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        <h1>User Information</h1>
    </header>
    <section>
        <h2>{{ $user->phone->prefix }}</h2>
        <h2>{{ $user->phone->phone_number }}</h2>
        <h1>Courses for {{ $user->name }}</h1>
        <ul>
            @foreach($user->courses as $course)
                <li>{{ $course->name }} - {{ $course->description }}</li>
            @endforeach
        </ul>
        <h1>User Roles</h1>
        <ul>
            @foreach($user->roles as $role)
                <li>{{ $role->name }}  Added by: {{$role->pivot->added_by }}</li>
            @endforeach
        </ul>
    </section>
</body>
</html>