<?php
	include("classes/DB.php");
	include("classes/restaurants.php");
	include("classes/categories.php");
	include("classes/menus.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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

		<div class="container col-12 col-lg-12" id="menu">
			<?php
				$restaurant = Restaurants::getRestaurant($_GET["id"]);
				foreach ($restaurant as $info) {
			?>
			<h2><?=$info["strName"]?></h2>
			<div class="restaurant col-12 col-lg-12">
				<img class="col-12 col-lg-6" src="imgs/<?=$info["strImage"]?>" alt="<?=$info["strName"]?>">
				<p class="title col-12 col-lg-6"><?=$info["strDescription"]?></p>
			</div><!-- .restaurant -->
			<?php
			}
			?>

			<?php
				$menus = Menu::getMenu($_GET["id"]);
				foreach ($menus as $menu) {
			?>
			<div class="menu">
				<img class="col-12 col-lg-6" src="imgs/<?=$menu["image"]?>" alt="<?=$menu["menu"]?>">
				<div class="title col-12 col-lg-6">
					<h3><?=$menu["menu"]?></h3>
					<p><?=$menu["strDescription"]?></p>
					<div class="order">
						<h4>How to order</h4>
						<p><?=$menu["strOrder"]?></p>
					</div><!-- .order -->
				</div><!-- .title -->
			</div><!-- .company -->

			<?php
			}
			?>

			<div class="links">
				<a class="primary-button" href="categories.php">Check Other Categories</a>
				<a class="primary-button" href="restaurants.php">Check More Restaurants</a>
			</div><!-- .links -->
			
		</div><!--- .container -->

		<?php
			include("includes/footer.php");
		?>
	</div><!-- .wrapper -->
<script src="https://kit.fontawesome.com/76c00b2855.js" crossorigin="anonymous"></script>
</body>
</html>