@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Ingredients
            <a href="{{Route('ingredient.create')}}" class="btn btn-primary"> New </a>
            </div>
            <div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Plate</th>
                            <th scope="col">Actions</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ingredients as $ingredient)
                        <tr>
                            <td>{{$ingredient->name}}</td>
                            <td>
                                @foreach ($ingredient->plates as $plate)
                                    {{$plate->name}} <br>
                                @endforeach
                            </td>
                            <td>
                                <a href="{{Route('ingredient.edit',$ingredient->id)}}" value="Edit" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <form action="{{route('ingredient.destroy',$ingredient->id)}}" method="POST">
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
