<?php 
	require_once 'dbcon/init.php';
	include 'layouts/head.php';
	include 'layouts/header.php';
	include 'layouts/navigation.php';

	$sql = "SELECT * FROM items";
	$products = $db->query($sql);
?>
<div class="p-4 d-flex justify-content-row">
	<div class="pt-3 col-lg-2 d-flex justify-content-center border border-x-0 border-secondary">
		<div>Left Part</div>
	</div>
	<!--<div class="border border-top-0 border-dark" style="height:100px;"></div>-->
	<div class="col-lg-10">
		<h1 class="text-center">Main Part</h1>
		<br><br>
		<div class="row pl-5">
			<?php while ($item = mysqli_fetch_assoc($products)):?>
				<div class="col-md-3 ">
					<h4><?= $item['title'];?></h4>
					<img class="" style="height: 150px;" src=<?= $item['image'];?>>
					<br>
					<p class="price">Price : <?= $item['price'];?> kzt</p>
				</div>
			<?php endwhile;?>
		</div>
	</div>
</div>

<?php include("layouts/footer.php");?>