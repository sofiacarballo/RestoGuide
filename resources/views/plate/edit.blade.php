@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('plate.update',$plate->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-header">
                    Plates
                </div>
                <div class="class-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name='name' class="form-control" value="{{$plate->name}}">
                            <label for="address">Price</label>
                            <input type="text" name="price" class="form-control" value="{{$plate->price}}">
                        </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
