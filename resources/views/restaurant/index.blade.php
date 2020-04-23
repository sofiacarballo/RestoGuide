@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Restaurant
            <a href="{{Route('restaurant.create')}}" class="btn btn-success"> New </a>
            </div>
            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Owner</th>
                            <th scope="col">Actions</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($restaurants as $restaurant)
                        <tr>
                            <td>{{$restaurant->name}}</td>
                            <td>{{$restaurant->address}}</td>
                            <td>+34 {{$restaurant->phone}}</td>
                            <td>{{$restaurant->user->name ?? 'No owner'}}</td>
                            <td>
                                <a href="{{Route('restaurant.show',$restaurant->id)}}" value="Show plates" class="btn btn-dark">Show</a>
                            </td>
                            <td>
                                <a href="{{Route('restaurant.edit',$restaurant->id)}}" value="Edit" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('restaurant.destroy',$restaurant->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-xs btn-danger">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection
