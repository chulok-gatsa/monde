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

    <form class="reg" method="post" action="{{route('registration')}}">
    <label for="" class="Auth">Регистрация</label>
        @csrf
        <div class="form-group">
            <input type="text" class="form" id="name" name="name" value="" placeholder="Имя">
            @error('name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="text" class="form" id="surname" name="surname" value="" placeholder="Фамилия">
            @error('surname')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="text" class="form" id="patronimyc" name="patronimyc" value="" placeholder="Отчество">
            @error('patronimyc')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="text" class="form" id="login" name="login" value="" placeholder="Логин">
            @error('login')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="text" class="form" id="email" name="email" value="" placeholder="Email">
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror 
            <input type="password" class="form" id="passsword" name="password" value="" placeholder="Пароль">
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror  
            <input type="password" class="form" id="password_confirmation" name="password_confirmation" value="" placeholder="Повторите пароль">
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <button class="btn-reg" type="submit" name="sendMe" value="1">Зарегистрироваться</button>
        </div>
        <label for="" class="silka_reg">Зарегистрированы? <a class="silka" href="{{route('login')}}"> Авторизоваться</a></label>
    </form>
    <img class="fon_registr"  src="/img/fon_reistr.png" alt="">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </body>
</html>
