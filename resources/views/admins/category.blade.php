@extends('admins.layouts.app')
@section('content')
<div class="container-xl px-4 mt-4">

    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Category List</div>
                <div class="card-body">
                    <a href="{{ route('createCategory') }}">Add Category</a>
                    <h4>Total Category:{{$categoryCount}}</h4>
                  
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Acction</th>
                            <th>Delete</th>
                        </tr>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="{{ route('editCategory',['category'=>$category]) }}">Edit</a>
                                </td>
                                <td>  
                                    <form method="POST" action="{{ route('deleteCategory',['category'=>$category]) }}">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
