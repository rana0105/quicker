<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>QuickerBD | Clinent Information</title>
	<!-- Latest compiled and minified CSS -->
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> --}}
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container" style="margin-top: 10px;">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/">QuickerBD</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        {{-- <li class="{{ Request::is('/') ? "active" : "" }}"><a href="{{ url('/') }}">Customer</a></li> --}}
		        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="{!! URL::to('/') !!}">Invoice</a></li>
		      </ul>
		      {{-- <form class="navbar-form navbar-right" role="form" action="/" method="GET">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" name="search_tag">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form> --}}
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	<div class="container" style="margin-top: 80px;">
	@yield('content')
	</div>
{{-- <script type="text/javascript" src="{{asset('js/app.js')}}"></script> --}}
</body>
</html>