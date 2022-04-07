
@extends('layouts.admin')

@section('title')
    Dashboard
@endsection
@section('content')
    <div class="wrapper">
        <div class="teacher_header">
            <h1>CREATE TEACHER</h1>
            <a class="teacher_create" href="/admin/teacher"><-</a>
        </div>

        <form action="" method="POST">
            @csrf
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" id="name" required>

            <label for="surname"><b>Surname</b></label>
            <input type="text" placeholder="Enter Surname" name="surname" id="surname" required>

            <label for="patronymic"><b>Patronymic</b></label>
            <input type="text" placeholder="Enter Patronymic" name="patronymic" id="patronymic" required>


            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw-repeat" required>
            <hr>
            <button type="submit" class="registerbtn">Register</button>
        </form>
    </div>
@stop

