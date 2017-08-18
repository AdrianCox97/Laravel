<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Mini Proyecto</title>

	<!-- Bootstrap CSS CDN -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/style4.css') }}">

	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/5f465ad8af.js"></script>

</head>
<body>

<div class="wrapper">

	<!-- Sidebar Holder -->
	<nav id="sidebar">

		<div class="sidebar-header text-center">
			<h3>
				<img class="img-circle" src="http://www.lorempixel.com/500/500" alt="Foto" width="100px" height="100px">
				<hr style="border: 0">
				Bootstrap Sidebar
			</h3>
			<strong>
				<img src="http://www.lorempixel.com/500/500" alt="Foto" width="47.5px" height="47.5px">
			</strong>
		</div>

		<ul class="list-unstyled components">
			<li class="active">
				<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
					<i class="fa fa-dashboard"></i>
					Home
				</a>
				<ul class="collapse list-unstyled" id="homeSubmenu">
					<li><a href="#">Home 1</a></li>
					<li><a href="#">Home 2</a></li>
					<li><a href="#">Home 3</a></li>
				</ul>
			</li>

			<li>
				<a href="#">
					<i class="fa fa-briefcase"></i>
					About
				</a>
				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
					<i class="fa fa-files-o fa-flip-horizontal"></i>
					Pages
				</a>
				<ul class="collapse list-unstyled" id="pageSubmenu">
					<li><a href="#">Page 1</a></li>
					<li><a href="#">Page 2</a></li>
					<li><a href="#">Page 3</a></li>
				</ul>
			</li>

			<li>
				<a href="#">
					<i class="fa fa-link"></i>
					Portfolio
				</a>
			</li>

			<li>
				<a href="#">
					<i class="fa fa-paperclip"></i>
					FAQ
				</a>
			</li>

			<li>
				<a href="#">
					<i class="fa fa-send"></i>
					Contact
				</a>
			</li>
		</ul>
	</nav>

	<!-- Page Content Holder -->
	<div id="content">
		<button type="button" id="sidebarCollapse" class="btn btn-info">
			<i class="fa fa-bars"></i>
		</button>
		<!--<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Page</a></li>
						<li><a href="#">Page</a></li>
						<li><a href="#">Page</a></li>
						<li><a href="#">Page</a></li>
					</ul>
				</div>
			</div>
		</nav>-->

	@yield('prueba')

	</div>

</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function () {
		$('#sidebarCollapse').on('click', function () {
			$('#sidebar').toggleClass('active');
		});
	});
</script>

</body>
</html>