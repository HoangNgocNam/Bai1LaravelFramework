<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Đăng nhập</h1>
<form action="/login" method="post">
    @csrf
    <input type="text" name="username" placeholder="Tên đăng nhập">
    <input type="password" name="password" placeholder="nhập passwrd">
    <button type="submit">Đăng nhập</button>
</form>
</body>
</html>
