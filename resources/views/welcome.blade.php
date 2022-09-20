<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>

    <style>
        body {
            padding: 0;
            margin: 0;
            overflow: hidden;
            background: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
     
        input {
            padding: 1rem;
            border: none;
            border-radius: 20px
        }

        button{
            padding: 1rem;
            background: #fff;
            color: #333;
            border: none;
            cursor: pointer;
        }

    </style>
</head>
<body>

    <form action="{{route('email.store')}}" method="POST">

        @csrf
       
        <input type="email" name="email" placeholder="Email">
        <button>Send</button>
    </form>
     <a href="{{route('login')}}">Login</a>
</body>
</html>