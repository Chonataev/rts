
@extends('layouts.auth')

@section('title', 'Login')

@section('content')


    <div id="main" class="container">

        <div class="login">
            <h1>Авторизация</h1>
            <form method="post" action="{{url('login')}}">
                @csrf
                <p><input class="input_1" type="text" name="username" placeholder="Username"></p>
                <p><input class="input_2" type="password" name="password" placeholder="Password"></p>

                <br>
                <p class="submit"><input class="input_button" type="submit" name="commit" value="Sing in"></p>
            </form>
        </div>

    </div>
        <script>
            setTimeout(function(){
                document.getElementById('message-wrapper').style.display = 'none';
            }, 3000);
        </script>
@stop

