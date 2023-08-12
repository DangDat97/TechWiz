@extends('admins.layouts.app')
@section('content')
    <h2 class="mb-4">User</h2>
    <a href="{{ route('createUsers') }}">Add Users</a>
    <h4>Total User:{{$userCount}}</h4>
    <table class="table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Acction</th>
            <th>Delete</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if ($user->roles == null)
                        User
                    @else

                    {{ $user->roles->name }}

                    @endif
                </td>
                <td>
                    <a href="{{ route('editUser',['user'=>$user]) }}">Edit</a>
                </td>
                <td>  
                    <form method="POST" action="{{ route('deleteUser',['user'=>$user]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
