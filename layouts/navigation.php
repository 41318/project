<?php 
$sql = 'SELECT * FROM categories WHERE item_id=0';
$var = $db->query($sql);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent pt-3" style="font-size: 20px;">
	<!--
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->
  <div class="collapse navbar-collapse pl-5 mb-2" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 pl-5">
    	<li class="active pr-4">
    		<a href="#" id="main" class="nav-link">Main</a>
    	</li>
    	<li class="active pr-4">
        <a href="#" class="nav-link">About</a>
      </li>
      <li class="active pr-4">
        <a class="nav-link" href="#">Contacts</a>
      </li>
      <li class="dropdown active pr-4">
      	<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Categories<span class="caret"></span></a>
      	<ul class="dropdown-menu" role="menu">
          <?php while ($category = mysqli_fetch_assoc($var)):?>
      		  <li>
              <a href="#" class="pl-2 text-decoration-none text-dark btn-light btn-block" style="font-size:20px;"><?php echo $category['title'];?></a>
            </li>
          <?php endwhile;?>
      	</ul>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>
  </div>
</nav>
<hr class="bg-light">
</div>