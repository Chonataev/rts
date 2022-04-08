
@extends('layouts.admin')

@section('title')
    Admin Images Create
@endsection
@section('content')
<div class="wrapper">
    <div class="teacher_header">
        <h1>Upload Images</h1>
        <a class="teacher_create" href="/gallery/index"><-</a>
    </div>
    <div class="mt-10 sm:mt-0">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{route('admin.gallery.store')}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="post">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white">
                        <div class="col-6 m-auto">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="input-group  mb-3 col-6">
                                    <input type="text" name="type" class="form-control border" placeholder="Select Type">
                                </div>
                                <div class="input-group input-group-sm mb-3 col-6">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            </div>
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
@stop


