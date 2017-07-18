@extends('layouts/app')

@section('title')

@endsection

@section('content')
	@if(Session::has('message'))
		<div class="alert alert-success">{{Session::get('message')}}</div>
	@endif
	@if(Auth::user() && Auth::user()->role=='admin')
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-2"></div>
		<div class="col-xs-12 col-sm-12 col-md-8">
			<h2>New Task</h2>
			<form method="POST" action="" class="form-inline">
			{{csrf_field()}}
				<div class="form-group">
					<input type="text" name="name" placeholder="name" class="form-control"></input>
				</div>
				<div class="form-group">
					<input type="text" name="description" placeholder="description" class="form-control"></input>
				</div>
					
					<input type="submit" name="submit" value="Add Task" class="btn btn-success"></input>
					
			</form>
		</div>
	</div>
	@endif
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-striped">
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th></th>
				</tr>
				@foreach($tasks as $task)
				<tr>
					<td>{!!$task->name!!}</td>
					<td>{!!$task->description!!}</td>
					@if(Auth::user() && Auth::user()->role=='admin')
					<td><a href='{{url("/delete/$task->id")}}'><button class="btn btn-danger">Delete</button></a></td>
					@endif
				</tr>
				@endforeach
			</table>
		</div>
	</div>
@endsection