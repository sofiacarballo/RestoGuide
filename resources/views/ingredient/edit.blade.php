@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('ingredient.update',$ingredient->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-header">
                    Ingredients
                </div>
                <div class="class-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name='name' class="form-control" value="{{$ingredient->name}}">
                        </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
