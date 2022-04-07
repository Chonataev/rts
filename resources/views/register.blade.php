
@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <h4 class="session_answer">
        @if($errors->any())
            {{$errors->first()}}
        @endif
    </h4>


    <div id="main" class="container">

        <div class="login">
            <h1>Авторизация</h1>
            <form method="post" action="{{url('store')}}">
                @csrf
                <p><input class="input_1" type="text" name="username" placeholder="Username"></p>
                <p><input class="input_2" type="password" name="password" placeholder="Password"></p>
                <p><input class="input_2" type="text" name="name" placeholder="Real name"></p>
                <p><input class="input_2" type="text" name="surname" placeholder="Surname"></p>
                <p><input class="input_2" type="text" name="patronymic" placeholder="Patronymic"></p>
                <br>
                <p class="submit"><input class="input_button" type="submit" name="commit" value="Join"></p>
            </form>
        </div>

    </div>
@stop
