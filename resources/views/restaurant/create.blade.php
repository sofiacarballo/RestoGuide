@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <form action="{{Route('restaurant.store')}}" method="POST">
                @csrf
                <div class="card-header">
                    Restaurants
                </div>
                <div class="class-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name='name' class="form-control"/>
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control"/>
                            <label for="phone">Phone number</label>
                            <input type="text" name="phone" class="form-control"/>
                            <input type="hidden" name="user_id" value="{{auth::user()->id}}"/> 
                        </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Create" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
