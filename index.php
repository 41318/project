<?php include("layouts/header.php");?>
<div class="container row col-12 display-flex justify-content-center">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		    <div class="carousel-item active">
		        <img src="https://www.hasselbladfoundation.org/wp/wp-content/uploads/2015/07/500x1000px.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		        <img src="http://anband.spb.ru/images/100/DSC100112570.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		        <img src="" class="d-block w-100" alt="...">
		    </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	</div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary  display-flex justify-content-center mt-3" data-toggle="modal" data-target="#exampleModal">
  Here is the modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Onyn aldynda bolmay zhatkan "copy&paste"<br>
        Endi gana istedi)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php include("layouts/footer.php");?>