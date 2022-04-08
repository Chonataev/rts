
@extends('layouts.layout')

@section('title')
    @if (auth()->check())
        {{$teacher->name . ' ' . $teacher->surname}}
    @endif
@endsection
@section('content')

    <div class="row">
        <div class="col-8">
            <div class="pr-2 pl-2">
                <h4 class="border-bottom border-dark p-2" style="font-weight:600">{{$teacher->name}}</h4>
            </div>
            <div class="d-flex pt-3">
                <div class="col-4">
                    <div>Ранг:</div>
                    <div>Кантакты:</div>
                    <div>Роль:</div>
                </div>
                <div class="col-8">
                    <div style="font-weight:600">{{$teacher->surname}}</div>
                    <div style="font-weight:600">{{$teacher->patronymic}}</div>
                </div>
            </div>
        </div>
    </div>

@stop
