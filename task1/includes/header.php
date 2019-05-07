<!DOCTYPE html>
<html>
<head>
	<title>Site</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" type="text/javascript" href="js.js">
</head>
<body id="ten" class="display-flex bod bg-dark container-fluid position-relative">
	<header class="mx-1 my-2 p-3 pt-4 bg-secondary row">
		<div class="row col-md-7 py-2">
			<img src="Photos/Turtle.jpeg" class="rounded-circle col-md-2" width="100" height="100">
			<div class="col-md-10 pl-5 pt-5">
				<a href="about.php"><button class="btn btn-default bg-white mr-3">About</button></a>	
				<a href=""><button class="btn btn-default bg-white mr-3">Something</button></a>
				<button id="contact" class="btn btn-default bg-white mr-3">Contacts</button>
			</div>
		</div>
		<div class="col-md-5 pl-5">
			<div class="row pl-5">
				<input type="text" name="" placeholder="Search" >
				<button><i class="fa fa-search"></i></button>
			</div>
		</div>
	</header>
	<!-- w-100 h-100 bg-dark position-absolute top-0 display-none justify-content-center align-items-center -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="https://s2982.pcdn.co/wp-content/uploads/2017/11/death.jpg" alt="" style="width: 400px; height:100px">
	    </div>
	    <div class="item">
	      <img src="https://i.ytimg.com/vi/KhwHR9pkoao/maxresdefault.jpg" alt="" style="width: 400px; height:100px">
	    </div>
	    <div class="item">
	    	<img src="Photos/Turtle.jpeg" style="width: 400px; height:100px">
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<div class="row p-3 mb-5">
		<div class="column text-danger bg-white col-md-3 mr-3 pt-5 pb-5">
			<ul>
				<li>Main</li>
				<li>About</li>
				<li>Contacts</li>
				<li>Something</li>
			</ul>
		</div>
		<div class="col-md bg-secondary mb-5">