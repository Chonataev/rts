
@extends('layouts.admin')

@section('title')
Dashboard
@endsection
@section('content')
    <div class="wrapper">
        <div class="teacher_header">
            <h1>BROWSE TEACHERS</h1>
            <a class="teacher_create" href="/admin/teacher/create">+</a>
        </div>
        <table>
            <tr>
                <th>Name</th>
                <th>Patronymic</th>
                <th>Surname</th>
                <th>view</th>
                <th>delete</th>
            </tr>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{$teacher->name}}</td>
                    <td>{{$teacher->patronymic}}</td>
                    <td>{{$teacher->surname}}</td>
                    <td><a href="/teacher/profile/{{$teacher->username}}">view</a></td>
                    <td><a href="/admin/teacher/delete/{{$teacher->id}}">delete</a></td>

                </tr>
            @endforeach
        </table>
    </div>
@stop
