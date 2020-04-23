@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <table class="table">
                    <thead class="card-header">
                        <tr>
                            <th scope="col">INGREDIENTS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plate->ingredients as $ingredient)
                        <tr>
                            <td>{{$ingredient->name}} </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection
