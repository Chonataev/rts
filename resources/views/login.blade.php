
@extends('layouts.auth')

@section('title', 'Login')

@section('content')
        <h4 class="session_answer">
            @if($errors->any())
                {{$errors->first()}}
            @endif
        </h4>


    <div id="main" class="container">

        <div class="login">
            <h1>Авторизация</h1>
            <form method="post" action="{{url('login')}}">
                @csrf
                <p><input class="input_1" type="text" name="email" placeholder="Имя"></p>
                <p><input class="input_2" type="password" name="password" placeholder="Пороль"></p>

                <br>
                <p class="submit"><input class="input_button" type="submit" name="commit" value="Вход"></p>
            </form>
        </div>

    </div>
@stop
