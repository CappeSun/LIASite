<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIASite</title>
</head>
<body>
    <h1>Yup, seems to work</h1>
    <form action="/panels/update" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PATCH">
        <button>Test</button>
    </form>
    <form action="/user/create" method="post">
        <input type="text" name="name" value="{{ old('name') }}">
        <input type="text" name="email" value="{{ old('email') }}">
        <input type="text" name="password" value="{{ old('password') }}">
        <input type="hidden" name="level" value="1">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>Create User</button>
    </form>
    <form action="/login" method="post">
        <input type="text" name="email" value="{{ old('email') }}">
        <input type="text" name="password">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>Login</button>
    </form>
    <form action="/logout" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>Logout</button>
    </form>
</body>
</html>