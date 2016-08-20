@extends('layouts.layout-main')
	@section('content')
    <div class = "col-sm-9">
      <div class = "col-sm-6">
        <p class = "btn btn-danger" style="width: 90%;">
          <i class="fa fa-user" style="font-size: 158px;"></i>
          <br/>
          <small style="font-size:35px">User({{ $users }})</small>
        </p>
      </div>
      <div class = "col-sm-6">
        <p class = "btn btn-warning" style="width: 90%;">
          <i class="fa fa-calendar " style="font-size: 158px;"></i> 
          <br/>
          <small style="font-size:35px">Schedule Tasks({{ $tasks }})</small>
        </p>
      </div>
    </div>
  @endsection