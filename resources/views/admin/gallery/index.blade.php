
@extends('layouts.admin')

@section('title')
    Browse Images
@endsection
@section('content')
    <div class="wrapper">
        <div class="teacher_header">
            <h1>Browse Images</h1>
            <a class="teacher_create" href="/admin/gallery/store">+</a>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    #
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    image
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    name
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    size
                                </th>
                                <th scope="col" class="px-6 py-3 pr-9 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            @foreach ($images as $image)
                                <tbody class="bg-white divide-y divide-gray-200 ">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900 text-center">
                                            {{$image->id}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900 text-center">
                                            {{$image->type}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <img style="width: 100px;" src="{{asset($image->image)}}" alt="">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        {{$image->path}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        {{$image->size}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right pr-10 font-medium text-center">
                                        <form action="{{route('admin.gallery.delete',$image->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete the image?');">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>

                                <!-- More items... -->
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
