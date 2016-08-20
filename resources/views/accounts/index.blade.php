@extends('layouts.layout-main')
	@section('content')
	<div class = "col-sm-9">
	@forelse($users as $u)
		<div class="col-sm-12">
			<h3 class="account-title-text">
				<i class="fa fa-user"></i> {{ $u->name }}
			</h3>
			<p class="account-title-subtxt">{{ $u->email }}</p>
			<p class="account-title-subtxt">{{ $u->role }}</p>
			<p class="account-title-subtxt">{{ \Carbon\Carbon::parse($u->users_created_at)->format('F j, Y') }}</p>
		</div>
		<hr />
		@empty	
		<div class="alert alert-warning">
			<i class="fa fa-exclamation-triangle"></i> There are no results found.
		</div>
		@endforelse
	</div>
@endsection
