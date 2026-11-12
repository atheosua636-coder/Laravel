<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Simple POS &amp; Tasks</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Simple POS &amp; Tasks</h1>
        <nav>
            <a href="{{ route('home') }}">Today's Tasks</a>
            <a href="{{ route('tasks.index') }}">All Tasks</a>
            <a href="{{ route('pos.home') }}">POS Home</a>
            <a href="{{ route('customers.index') }}">Customers</a>
            <a href="{{ route('users.index') }}">POS Users</a>
            <a href="{{ route('profile') }}">Profile</a>
            <a href="{{ route('about') }}">About</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
