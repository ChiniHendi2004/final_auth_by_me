<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Login</title>
</head>
<body>
    <h2>Login</h2>
    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <label for="client_slug">Client Slug:</label>
        <input type="text" name="client_slug" id="client_slug" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
    <br>
    <a href="{{ route('password.request') }}">Forgot Password?</a>
</body>
</html>
