@extends('layout.master')

@section('title', 'Products')

@section('content')
    <h1>Products Page</h1>
    @foreach ($cars as $car)
      <table>
        <tr>
          <th>Car Name</th>
          <th>Car Model</th>
          <th>Car Color</th>
        </tr>
        <tr>
          <td>{{$car[0][0]}}</td>
          <td>{{$car[1][1]}}</td>
          <td>{{$car[2][2]}}</td>
        </tr>
      </table>
    @endforeach
@endsection
