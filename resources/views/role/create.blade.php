@extends('layouts.app')


@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
      
      <form class="form-horizontal" method="post" action="{{route('role.store')}}">
        @csrf
        <div class="card-body">
          <h4 class="card-title">Create Role</h4>
          <div class="from-group row">
            <label for="name" class="col-sm-3 text-right control-label col-form-label">Role Name</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="name" name="role" placeholder="Enter Role Here">
            </div>
          </div>
          <div class="border-top">
            <div class="card-body">
              <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          
        </div>
        
      </form>
    </div>
  </div>
  </div>
</div>

@endsection