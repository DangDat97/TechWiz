@extends('admins.layouts.app')
@section('content')
<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account List</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4">
                            <form action="{{ route('Accessories') }}">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Accessory Name</label>
                                  <input type="text" class="form-control"  placeholder="Enter Name" name="title"> 
                                </div>
                                <div class="form-group form-check p-2">
                                        <label for="cars">Choose a type:</label>
                                            
                                            <select name="type[]" id="cars">
                                                @foreach ($types as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                                @endforeach
                                            </select>
                                </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label >Min</label>
                                            <input type="number" class="form-control" placeholder="$0" name="min">
                                        </div>
                                        <div class="form-group">
                                            <label >Max</label>
                                            <input type="number" class="form-control" placeholder="$300" name="max">
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                            </form>
                        </div>
                        <div class="col-xl-8">
                            <table class="table">
                                <tr>
                                    <th>Name</th>
                                    {{-- <th>Image</th> --}}
                                    <th>Price</th>
                                    <th>Acction</th>
                                    <th>Delete</th>
                                </tr>
                                @foreach ($accessories as $accessory)
                                    <tr>
                                        <td>{{ $accessory->name }}</td>
                                        <td>{{ $accessory->price }}</td>
                                     
                                        <td>
                                            <a href="{{ route('editAccessories',['accessory'=>$accessory]) }}">Edit</a>
                                        </td>
                                        <td>  
                                            <form method="POST" action="{{ route('deleteAccessories',['accessory'=>$accessory]) }}">
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
    </div>
</div>




@endsection