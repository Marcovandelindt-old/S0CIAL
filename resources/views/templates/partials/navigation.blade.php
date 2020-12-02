<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="/">
		Social
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinkList" aria-controls="navbarLinkList">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="#">
					Timeline
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					Mentions
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					Friends
				</a>
			</li>
		</ul>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">
					Sign In
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link btn btn-success" href="{{ route('auth.signup') }}">
					<span style="color: #fff;">Sign Up</span>
				</a>
			</li>
		</ul>
	</div>
</nav>