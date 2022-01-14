<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("boot.css")}}">
    <title>Login</title>
</head>
<body>
    <div class="container d-flex" style="height: 100vh;">
        <div class="col-5 m-auto">

            <form method="post" class="form-control align-self-center p-3">
                @csrf
                <h2 class="lead display-5 text-center">Login</h2>
                <br>
                <label for="email">Eamil</label>
                <input type="email" name="email" class="form-control" id="email">
                 <br>
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
                <br>
                <input type="submit" class="form-control bg-primary text-white mt-2" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
