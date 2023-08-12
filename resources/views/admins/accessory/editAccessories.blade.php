@extends('admins.layouts.app')
@section('content')
<div class="container-xl px-4 mt-4">

    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Update Asseccory</div>
                <div class="card-body">
                                
                @if($errors->any())
                @foreach($errors->all() as $error)
                <p style="color:red;">{{ $error }}</p>
                @endforeach
                @endif

                <form action="{{route('updateAccessories',['accessory'=>$accessory])}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                <input  class="form-control" type="text" name="name" placeholder="Enter Name" value="{{$accessory->name}}">
                <input  class="form-control" type="text" name="use" placeholder="Enter Use" value="{{$accessory->use}}">
                <input  class="form-control" type="text" name="price" placeholder="Enter Price" value="{{$accessory->price}}">
                <input  class="form-control" type="text" name="type_id" placeholder="Enter Type Id" value="{{$accessory->type_id}}">
                <input  class="form-control" type="text" name="image" placeholder="Enter Image" value="{{$accessory->image}}">
                <input  type="submit" class="btn btn-primary btn-sm mt-3" value="Update">
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection