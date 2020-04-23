@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('restaurant.update',$restaurant->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-header">
                    Restaurant
                </div>
                <div class="class-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name='name' class="form-control" value="{{$restaurant->name}}">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" value="{{$restaurant->address}}">
                            <label for="phone">Phone number</label>
                            <input type="text" name="phone" class="form-control" value="{{$restaurant->phone}}">
                        </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
