<html>
	<head>
		<title> User  Page </title>
		{{ HTML::style('bootstrap.css')}}
	</head>
		<body>
	 	<nav class="navbar navbar-inverse">
	        <div class="container-fluid">
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	            	<ul class="nav navbar-nav navbar-right">
	            		<li ><a href="{{ route('logout') }}">Logout</a></li>  
	            	</ul>
	                <ul class="nav navbar-nav navbar-left">
	                	<li class="active"><a href="{{ route('index') }}">WTH2015</a></li>
	                    	<li><a href="#">Show Profile</a></li>
	                </ul>
	            </div>
	        </div>
	    </nav>
		<div class="row">
			@yield('contents')
		</div>
	</body>
</html>