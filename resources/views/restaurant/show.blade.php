@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <table class="table">
                    <thead class="card-header">
                        <tr>
                            <th scope="col">RESTAURANT: {{$restaurant->name}}</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
            </div>
            <div class="card-body">
                <td>OWNER:  {{$restaurant->user->name}} </td>
                <td>ADDRESS: {{$restaurant->address}} </td>
                <td>PHONE NUMBER: +34 {{$restaurant->phone}} </td>
            </div>
            <div>
                <table class="table">
                    <thead class="card-header">
                        <tr>
                            <th scope="col">PLATES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($restaurant->plates as $plate)
                        <tr>
                            <td>{{$plate->name}} - Added at: {{$plate->created_at->calendar()}} </td>

                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection
