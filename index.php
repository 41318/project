<?php 
	require_once 'dbcon/init.php';
	include 'layouts/head.php';
	include 'layouts/header.php';
	include 'layouts/navigation.php';

	$category = 'SELECT * FROM categories WHERE item_id = 0';
	$v1 = $db->query($category);
?>
<div class="p-4 d-flex justify-content-row">
	<div class="pt-3 col-lg-2 d-flex justify-content-center border border-top-0 border-bottom-0 border-left-0 border-secondary">
		<div>Left Part</div>
	</div>
	<!--<div class="border border-top-0 border-dark" style="height:100px;"></div>-->
	<div class="col-lg-10">
		<h1 class="text-center">Main Part</h1>
		<br><br>

		<?php while($v2 = mysqli_fetch_assoc($v1)):?>
			<?php
				$v4 = $v2['id'];
				$v3 = 'SELECT * FROM items WHERE category_id = $v4';
				$v5 = $db->query($v3);
			?>
			<div><?php echo $v2['title'];?></div>
			<div class="row pl-5">
				<?php while ($item = mysqli_fetch_assoc($v5)):?>
					<div class="col-md-3 pt-3 pb-2 column border rounded">
						<div class="d-flex justify-content-center">	
							<img style="height: 150px;" src=<?= $item['image'];?>>
						</div>
						<div class="pl-3 pr-3">
							<hr>
						</div>
						<h5><?= $item['title'];?></h5>
						<div><?php echo $item['description'];?></div>
						<p class="price">Price : <?= $item['price'];?> kzt</p>
					</div>
				<?php endwhile;?>
			</div>
			<br>
		<?php endwhile;?>
	</div>
</div>

<?php include("layouts/footer.php");?>