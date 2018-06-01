@extends('layouts.app')

@section('content')

	@include('admin.includes.errors')
	
	<div class="card">
		<div class="card-header">Edit Your profile</div>

		<div class="card-body">
			<form action="{{ route('user.profile.update') }}" method="post" enctype ='multipart/form-data'> 
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">User</label>
					<input type = "text" value = "{{ $user->name }}" name = "name" class="form-control"></input>
				</div>
				<div class="form-group">
					<label for="name">Email</label>
					<input type = "email" value = "{{ $user->email }}" name = "email" class="form-control"></input>
				</div>
				<div class="form-group">
					<label for="name">New Password</label>
					<input type = "password" name = "password" class="form-control"></input>
				</div>
				<div class="form-group">
					<label for="name">Facebook Profile</label>
					<input type = "text" value = "{{ $user->profile->facebook }}" name = "facebook" class="form-control"></input>
				</div>
				<div class="form-group">
					<label for="name">Youtube Profile</label>
					<input type = "text" value = "{{ $user->profile->youtube }}" name = "youtube" class="form-control"></input>
				</div>
				<div class="form-group">
					<label for="about">About You</label>
					<textarea name="about" id="about" cols="6" rows ="10" class="form-control">{{ $user->profile->about }}</textarea>
				</div>
				<div class="form-group">
					<label for="name">Upload new Avatar</label>
					<input type = "file" name = "avatar" class="form-control"></input>
				</div>
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">
							Update Profile
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	
@stop