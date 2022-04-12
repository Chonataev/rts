
@extends('layouts.admin')

@section('title')
    Browse Classes
@endsection
@section('content')
    <div class="wrapper">
        <div class="teacher_header">
            <h1>Browse Classes</h1>
            <a class="teacher_create" href="/admin/classes/store">+</a>
        </div>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Class
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Room
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Teacher
                                </th>
                                <th scope="col" class="px-6 py-3 pr-9 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            @foreach ($classes as $class)
                                <tbody class="bg-white divide-y divide-gray-200 ">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900 text-center">
                                            {{$class->name}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900 text-center">
                                            {{$class->teacher_id}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900 text-center" style="text-overflow: ellipsis; overflow: hidden; max-width: 500px;">
                                            {{$class->room}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right pr-10 font-medium text-center">
                                        <form action="{{route('admin.classes.delete',$item->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete the item?');">
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
