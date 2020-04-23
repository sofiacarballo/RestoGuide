@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Plates
            <a href="{{Route('plate.create')}}" class="btn btn-primary"> New </a>
            </div>
            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Restaurant</th>
                            <th scope="col">Actions</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plates as $plate)
                        <tr>
                            <td>{{$plate->name}}</td>
                            <td>€{{$plate->price}}</td>
                            {{-- <td>{{$plate->restaurant->name}}</td> --}}
                            <td>{{$plate->restaurant->id ?? 'No restaurant'}}</td>
                            <td>
                                <a href="{{Route('plate.show',$plate->id)}}" value="Show Ingredients" class="btn btn-dark">Show</a>
                            </td>
                            <td>
                                <a href="{{Route('plate.edit',$plate->id)}}" value="Edit" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('plate.destroy',$plate->id)}}" method="POST">
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
