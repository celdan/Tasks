@extends('layouts.layout-main')
@section('content')
	<div class="col-sm-9">

		<!-- breadcrumbs -->
		<div class = "row">
	        <div class = "col-sm-12">
	          <small> <a href = "{{ url('tasks') }}" >Tasks</a> >
	           	Create
	          </small>
	        </div>
      	</div>
      	<!--  -->

      	<!-- errors section -->
		@if ($errors->any())
			<div class="alert alert-warning">
				@foreach ($errors->all() as $error)
					<i class="fa fa-exclamation-triangle"></i> {{ $error }}<br />
				@endforeach
			</div>
		@endif
		@if (!empty($message))
			<div class="alert alert-success">
			<i class="fa fa-exclamation-triangle"></i><small>{{ $message }}</small><br />
		</div>
		@endif
		<!--  -->

	{!! Form::open(array('route' => ['create.tasks'],'class' => 'form', 'method' => 'post')) !!}
		<div class = "col-sm-4">
			<div class="form-group">
				<label> Task Title</label>
				<input type = "text"class = "form-control" name = "task_title" required />
			</div>
			<div class="form-group">
				<label> Task Description</label>
				<textarea class = "form-control" name = "task_description" required ></textarea>
			</div>
			<div class="form-group">
				<label> Status</label>
				<select name = "status" class = "form-control">
					<option value="0">Pending</option>
					<option value = "1">Active</option>
				</select>
			</div>
			<div class="form-group pull-right">
				<input type = "submit" name = "submit" value="save" class = "btn btn-primary"  />
			</div>
		</div>
	{!! Form::Close() !!}
	</div>
@endsection