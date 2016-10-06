<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Sistem Penilaian K13</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			@if(Auth::check())
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ route('auth.logout') }}">Logout</a></li>
			</ul>
			@endif
		</div>
	</div>
</nav>