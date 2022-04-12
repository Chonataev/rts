
@extends('layouts.admin')

@section('title')
    Browse Classes
@endsection
@section('content')
    <div class="wrapper">
    <div class="teacher_header">
        <h1>Browse Classes</h1>
        <a class="teacher_create" href="/classes/index"><-</a>
    </div>
    <div class="mt-10 sm:mt-0">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{route('admin.classes.store')}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="post">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white">
                        <div class="col-6 m-auto">
                            <div class="input-group">
                                <input type="text" name="name" class="form-control border" placeholder="Class name">
                            </div>
                            <select class="js-example-basic-single" name="state">
                                <option value="AL">Alabama</option>
                                ...
                                <option value="WY">Wyoming</option>
                            </select>
                            <div class="py-3 float-right mx-4">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@stop


