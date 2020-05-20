@extends('Backend.master')

@section('content')

<table class="table table-sm table-responsive-sm table-borderless table-hover">
	<thead>
		<a href="#" class="btn btn-sm custom-btn float-left">Create task</a>
		<div class="float-right">
			<input type="text" class="form-control-sm" placeholder="Search" aria-label="" aria-describedby="search-btn">
			<button class="btn btn-sm custom-btn" type="button" id="search-btn"><i class="fas fa-search"></i></button>
		</div>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Title</th>
			<th scope="col">User</th>
			<th scope="col">Done</th>
			<th scope="col">Update</th>
			<th scope="col">Delete</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">1</th>
			<td>Clean the house</td>
			<td>Mark</td>
			<td>No</td>
			<td><a href="#" class="btn btn-sm custom-btn"><i class="fas fa-edit"></i></a></td>
			<td><a href="#" class="btn btn-sm custom-btn"><i class="fas fa-trash-alt"></i></a></td>
		</tr>
		<tr>
			<th scope="row">2</th>
			<td>Wash the car</td>
			<td>Alex</td>
			<td>Yes</td>
			<td><a href="#" class="btn btn-sm custom-btn"><i class="fas fa-edit"></i></a></td>
			<td><a href="#" class="btn btn-sm custom-btn"><i class="fas fa-trash-alt"></i></a></td>
		</tr>
		<tr>
			<th scope="row">3</th>
			<td>Create a project</td>
			<td>Amal</td>
			<td>No</td>
			<td><a href="#" class="btn btn-sm custom-btn"><i class="fas fa-edit"></i></a></td>
			<td><a href="#" class="btn btn-sm custom-btn"><i class="fas fa-trash-alt"></i></a></td>
		</tr>
	</tbody>
</table>
<nav aria-label="...">
	<ul class="pagination pagination-sm">
		<li class="page-item disabled">
	    	<a class="page-link" href="#" tabindex="-1">1</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
	</ul>
</nav>

@endsection