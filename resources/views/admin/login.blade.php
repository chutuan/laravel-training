<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Training | Login</title>
    <base href="{{ asset('') }}">
</head>
<body>
    
    <form action="admin/login" method="POST" class="form">
        <legend>Login</legend>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div>
            <label for="">Username</label>
            <input type="text" name="name" placeholder="Input username">
        </div>
        <div>
            <label for="">Password</label>
            <input type="text" name="password" placeholder="Input password">
        </div>
        <button type="submit">Login</button>
    </form>
    
</body>
</html>