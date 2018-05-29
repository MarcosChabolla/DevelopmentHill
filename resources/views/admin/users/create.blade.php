@extends('layouts.app')

@section('content')

	@include('admin.includes.errors')
	
	<div class="card">
		<div class="card-header">Create new user</div>

		<div class="card-body">
			<form action="{{ route('user.store') }}" method="post"> 
				{{csrf_field()}}
				<div class="form-group">
					<label for="name">user</label>
					<input type = "text" name = "name" class="form-control"></input>
				</div>
				<div class="form-group">
					<label for="name">email</label>
					<input type = "email" name = "email" class="form-control"></input>
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
							Store user
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
@stop