@extends('layouts.layout-main')
@section('content')
<div class = "col-sm-9 text-center">
	<div class="alert alert-info">
			<i class="fa fa-info-circle pull-left"></i>&nbsp;
				<small class = 'pull-left'>The user's username is his/her email</small>
		
	</div>
	{!! Form::open(array('route' => ['users.tasks'],'id'=>'searchForm','class' => 'form', 'method' => 'post')) !!}
	<div class = "col-sm-12 text-center">
		<div class = "col-sm-4 np">
			<div class="input-group">
		      <input type="text" name = "email" class="form-control" placeholder="Search using email">
			      <span class="input-group-btn">
			        <button class="btn btn-secondary search" type="button"><i class="fa fa-search"></i></button>
			      </span>
		    </div>
		</div>
	</div>
	{!! Form::Close() !!}
	<div class = "col-sm-12">
			<table id = "dataTable">
				<thead>
					<th class="no-sort">Name</th>
					<th class="no-sort">Role Type</th>
					<th class="no-sort">Task</th>
					<th class="no-sort">Description</th>
					<th class="no-sort">Created at</th>
					<th class="no-sort">Status</th>
				</thead>
				<tbody>

					@forelse($tasks as $t)
					<tr>
						<td>{{ $t->name }}</td>
						<td>{{ $t->role }}</td>
						<td>{{ $t->task_title}}</td>
						<td>{{ $t->task_description}}</td>
						<td>{{ \Carbon\Carbon::parse($t->tasks_created_at)->format('F j, Y') }}</td>
						<td>
							<!-- check status if pending or not -->
							@if($t->status == 0)
								<p class = 'status'>Pending</p>
							@else
								<p class = 'status'>Ok</p>
							@endif
							<!-- end -->
						</td>
					</tr>
					@empty
					@endforelse
				</tbody>
			</table>
		</div>
</div>
	<script>
	$(document).ready(function(){
		$('.search').on('click',function(){
			$( "#searchForm" ).submit();
		});

	})
		$('#dataTable').DataTable({
                                  "language": {
                                      "emptyTable":     "0 Result Found"
                                    },
                                    bFilter: false,bLengthChange: false,iDisplayLength: 10,bInfo: false,order: [],columnDefs: [{
                                  'targets': 'no-sort',
                                  'orderable': false,
        } ]});
	</script>
@endsection