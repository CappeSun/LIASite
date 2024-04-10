<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIASite</title>
</head>
<body>
    <h1>Yup, seems to work... Hi <?= $user['name']; ?>! Access level is <?= $user['level']; ?></h1>
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
    <form action="/panels/create" method="post">
        <input type="text" name="name" value="{{ old('name') }}">
        <input type="text" name="email" value="{{ old('email') }}">
        <input type="text" name="location" value="{{ old('location') }}">
        <input type="text" name="area" value="{{ old('area') }}">
        <input type="text" name="positions" value="{{ old('positions') }}">
        <input type="text" name="desc" value="{{ old('desc') }}">
        <input type="text" name="size" value="{{ old('size') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>Create Panel</button>
    </form>
    <form action="/panels/update" method="post">
        <input type="text" name="name" value="{{ old('name') }}">
        <input type="text" name="email" value="{{ old('email') }}">
        <input type="text" name="location" value="{{ old('location') }}">
        <input type="text" name="area" value="{{ old('area') }}">
        <input type="text" name="positions" value="{{ old('positions') }}">
        <input type="text" name="desc" value="{{ old('desc') }}">
        <input type="text" name="size" value="{{ old('size') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PATCH">
        <button>Update Panel</button>
    </form>
    <form action="/panels/delete" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>Delete Panel</button>
    </form>
</body>
</html>