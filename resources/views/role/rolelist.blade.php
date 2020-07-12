@extends('layouts.app')
@section('content')


<div class="row">
    <div class="col-xs-12">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Role Table</h3>
              <a href="{{route('role.create')}}" class="btn btn-primary pull-right" id="addBtn">Add New</a>
            </div>
  
</div>
<table id="example1" class="table table-bordered table-hover table-striped dataTable">
  <thead>
    <tr>
      <th>Sl</th>
      <th>Role Name</th>
      <th colspan = 2>Action</th>
    </tr>

    <tbody>
      <tr>
        @foreach($role as $role)
        <td>{{$sl++}}</td>
        <td>{{$role->role}}</td>
        <td><a href="{{route('role.edit', $role->id)}}" class="btn btn-info btn-xs">Edit</a></td>

          <td>
            <form method="post" action="{{route('role.delete', $role->id)}}">@csrf<button type="submit" class="btn btn-danger btn-xs">Delete</button></form>
          </td>

      </tr>
        @endforeach
    </tbody>
  </thead>
</table>
@endsection