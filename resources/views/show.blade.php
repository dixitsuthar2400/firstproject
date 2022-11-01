@extends('layout')

@section('content')

<table class="table">
<button class="btn btn-primary">Add</button> 
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  @foreach($data as $row)
  <tbody>
    <tr>
      <td>{{$row->id}}</td>
      <td>{{$row->fname}}</td>
      <td>{{$row->lname}}</td>
      <td>
     
      <button class="btn btn-success">Edit</button> 
      <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
  </tbody>
  @endforeach

</table>

@stop