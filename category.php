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
		<div class="container col-12 col-lg-12" id="category">
			<?php
				$category = Categories::getCategoryTitle($_GET["cId"]);
				foreach ($category as $categoryTitle) {
			?>
			<h2><?=$categoryTitle?></h2>
			<?php
			}
			?>
			<div class="restaurants">
				<?php
					$categories = Restaurants::getCategorizedRestaurants($_GET["cId"]);
					foreach ($categories as $category) {
				?>
				<!-- <h2><?=$category["category"]?></h2> -->
				<a href="menu.php?id=<?=$category["id"]?>" class="restaurant col-6 col-lg-3">
					<img src="imgs/<?=$category["strImage"]?>" alt="<?=$category["restaurant"]?>">
					<h3><?=$category["restaurant"]?></h3>
					<div class="primary-button">Unlock Secret Menu</div>
				</a><!-- .restanrant -->
				<?php
				}
				?>
			</div><!-- .restaurants -->

			<div class="links">
				<a class="primary-button" href="categories.php">Check Other Categories</a>
				<a class="secondary-button" href="restaurants.php">Check More Restaurants</a>
			</div><!-- .links -->
			
		</div><!-- .container -->

		<?php
			include("includes/footer.php");
		?>
	</div><!-- .wrapper -->
<script src="https://kit.fontawesome.com/76c00b2855.js" crossorigin="anonymous"></script>
</body>
</html>