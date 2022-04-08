
@extends('layouts.admin')

@section('title')
Dashboard
@endsection
@section('content')
    <div class="wrapper">
        <div class="teacher_header">
            <h1>BROWSE STUDENT</h1>
            <a class="teacher_create" href="/admin/student/create">+</a>
        </div>
        <table>
            <tr>
                <th>Name</th>
                <th>Patronymic</th>
                <th>Surname</th>
                <th>view</th>
                <th>delete</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->patronymic}}</td>
                    <td>{{$student->surname}}</td>
                    <td><a href="/student/profile/{{$student->username}}">view</a></td>
                    <td><a href="/admin/student/delete/{{$student->id}}">delete</a></td>

                </tr>
            @endforeach
        </table>
    </div>
@stop
