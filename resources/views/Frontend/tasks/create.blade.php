@extends('Frontend.master')

@section('content')
<div class="col">
	@include('errors')
	<form action="/tasks/create" method="POST">
		{{ csrf_field() }}
		<h3 class="text-center main-text">Create new task</h3>
		<div class="form-group">
			<label for="task"><i class="fas fa-pencil-alt"></i> Task title</label>
			<input type="text" name="title" class="form-control" id="task" autocomplete="off" placeholder="Type here your new task..">
		</div>
		<button type="submit" class="btn btn-lg custom-btn">Create</button>
	</form>
</div>

@endsection