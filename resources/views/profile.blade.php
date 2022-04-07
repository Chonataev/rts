
@extends('layouts.layout')

@section('title')
    @if (auth()->check())
        {{$user->name}}
    @endif
@endsection
@section('content')

    @if (auth()->check())
        @if (auth()->user()->isAdmin())
            <div class="row">
                <div class="col-8">
                    <div class="pr-2 pl-2">
                        <h4 class="border-bottom border-dark p-2" style="font-weight:600">{{$user->name}}</h4>
                    </div>
                    <div class="d-flex pt-3">
                        <div class="col-4">
                            <div>Ранг:</div>
                            <div>Кантакты:</div>
                            <div>Роль:</div>
                        </div>
                        <div class="col-8">
                            <div style="font-weight:600">{{$user->name}}</div>
                            <div style="font-weight:600">{{$user->email}}</div>
                            <div>
                                {{$user->role}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-8">
                    <div class="pr-2 pl-2">
                        <h4 class="border-bottom border-dark p-2" style="font-weight:600">{{$user->name}}</h4>
                    </div>
                    <div class="d-flex pt-3">
                        <div class="col-4">
                            <div>Ранг:</div>
                            <div>Кантакты:</div>
                            <div>Роль:</div>
                        </div>
                        <div class="col-8">
                            <div style="font-weight:600">{{$user->surname}}</div>
                            <div style="font-weight:600">{{$user->patronymic}}</div>
                            <div>
                                @if ($user->role)
                                    user
                                @else
                                    admin
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif

@stop
