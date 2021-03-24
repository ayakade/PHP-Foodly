<?php
	include("classes/DB.php");
	include("classes/restaurants.php");
	include("classes/categories.php");
	include("classes/menus.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Restaurants</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/site.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="wrapper col-12 col-lg-12">
		<?php
			include("includes/header.php");
		?>
		<div class="container col-12 col-lg-12" id="restaurant">
			<h2>Restaurant List</h2>
			<div class="restaurants col-12 col-lg-12">
			<?php
				$restaurants = Restaurants::getRestaurants();
				foreach ($restaurants as $restaurant) {
			?>
				<a href="menu.php?id=<?=$restaurant["id"]?>" class="restaurant col-6 col-lg-3">
					<img src="imgs/<?=$restaurant["strImage"]?>" alt="<?=$restaurant["strImage"]?>">
					<h3><?=$restaurant["strName"]?></h3>
					<div class="primary-button">Unlock Secret Menu</div>
				</a><!-- .restaurant -->
			<?php
				}
			?>
			</div><!-- .restaurants -->
		</div><!-- . container -->

		<?php
			include("includes/footer.php");
		?>
	</div><!-- end of wrapper -->
<script src="https://kit.fontawesome.com/76c00b2855.js" crossorigin="anonymous"></script>
</body>
</html>