@extends('user.layout.app')
@section('title','View All User')
@section('body')

hello
<div class="col-12">
   <a href="reg/create" class="btn btn-success d-block">Add User</a>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <th scope="row">Active</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
   
  </tbody>
</table>


@endsection