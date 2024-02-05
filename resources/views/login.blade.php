<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Italiana&display=swap" rel="stylesheet">
</head>
<body>
<a class="back" href="{{route('welcome')}}"> <img src="img/back.png" alt=""> </a>
    <form class="login" method="POST" action="{{route('login')}}">
        <label for="" class="Auth">Авторизация</label>
        @csrf 
        <div class="form-group">

            <input type="text" class="form" id="login" name="login" value="" placeholder="Логин">
            @error('login')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form" id="passsword" name="password" value="" placeholder="Пароль">
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
        <button class="btn_login" type="submit" name="sendMe" value="1">Авторизоваться</button>
        </div>   
         <label for="" class="silka_reg">Не авторизованы? <a class="silka" href="{{route('registration')}}"> Зарегистрироваться</a></label>
    </form>

    <img class="fon_registr"  src="/img/fon_reistr.png" alt="">


    
</body>
</html>
