<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Getidon - ToDo List</title>

		<!-- Core CSS -->
		<link href="{{ mix('/css/frontend.css') }}" rel="stylesheet">
	</head>

	<body>
		
		<div class="container cover-container">
			<div class="row">
				<div class="col">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="/tasks">
							<h3><i class="fas fa-check-circle"></i> Getidon <span class="small-text text-muted">todo list</span></h3>

						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link {{ request()->is('tasks/create') ? 'active' : '' }}" href="/tasks/create"><i class="fas fa-plus"></i> Add task</a>
								</li>
								<li class="nav-item">
									<div class="dropdown">
										<a class="nav-link custom-dropdown-btn dropdown-toggle" href="/account" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-user"></i> Account</a>

										<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											@if(auth()->user()->is_admin == 1)
												<a class="dropdown-item" href="/dashboard"><i class="fas fa-chalkboard"></i> Dashboard</a>
											@endif
											<a class="dropdown-item" href="/account/password"><i class="fas fa-lock"></i> Change password</a>
											<a class="dropdown-item" href="/account/settings"><i class="fas fa-cogs"></i> Settings</a>
											<a class="dropdown-item" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="row">
				@yield('content')
			</div>
			<div class="row">
				<div class="col footer text-center">
					<div class="container">
						<span class="text-muted">
							Made with <i class="fas fa-heart"></i> by <a href="https://instagram.com/pwndex" target="_blank">pwndex</a>
						</span>
					</div>
				</div>
			</div>
		</div>


		<!-- Core JS -->
		<script src="{{ mix('/js/frontend.js') }}"></script>
		@yield('scripts')
	</body>
</html>