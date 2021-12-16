@extends('layout.master')

@section('title', 'Products')

@section('content')
    <h1>Products Page</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
      </tr>
      <tr>
        <td>{{$id}}</td>
        <td>{{$name}}</td>
        <td>{{$price}}</td>
      </tr>
    </table>
@endsection
