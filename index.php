<?php
	include("classes/DB.php");
	include("classes/restaurants.php");
	include("classes/categories.php");
	include("classes/menus.php");
?>
<!DOCTYPE html>
<html lang="en">
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
		<div class="hero col-12 col-lg-12">
			<div class="heroImage"></div>
			<div class="background"></div>
			<div class="title">
				<div class="text">
					<h2>Find Your Secret Favorite</h2>
					<p>You'll find your favorite secret menu</p>
				</div><!-- .text -->
			</div><!-- .title -->
		</div><!-- .hero -->

		<div class="container col-12 col-lg-12">

			<div class="intro">
				<h3>Unlock all of the Secret Menus</h3>
				<div class="restaurants col-12 col-lg-12">
					<?php
						$restaurants = Restaurants::getRandRestaurant();
						foreach ($restaurants as $restaurant) {
					?>
					<a class="restaurant col-6 col-lg-3" href="menu.php?id=<?=$restaurant["id"]?>">
						<img src="imgs/<?=$restaurant["strImage"]?>" alt="<?=$restaurant["strName"]?>">
					</a>
					<?php
					}
					?>
				</div><!-- .restaurants -->
				<a class="primary-button" href="restaurants.php">Check More Restaurants</a>
			</div><!-- .intro -->

			<div class="popular">
				<h4>Popular Secret Menus</h4>
				<div class="menus">
					<?php
						$menus = Menu::getRandMenu();
						foreach ($menus as $menu) {
					?>
					<a class="menu" href="menu.php?id=<?=$menu["id"]?>">
						<img src="imgs/<?=$menu["image"]?>" alt="<?=$menu["strName"]?>">
						<p><strong><?=$menu["menu"]?></strong></p>
						<p><?=$menu["strName"]?></p>
						<div class="primary-button" >Unlock Secret</div>
					</a><!-- .menu -->
					<?php
					}
					?>
				</div><!-- .menus -->
			</div><!-- .popular -->

			<div class="categories">
				<h5>Find a Secret from Categories</h5>
				<div class="categoryList">
					<?php
						$categories = Categories::getCategories();
						foreach ($categories as $category) {
					?>
					<div class="category col-6 col-lg-4">
						<a href="category.php?cId=<?=$category["id"]?>">
							<div class="overlay">
								<img src="imgs/<?=$category["strImage"]?>" alt="<?=$category["strName"]?>">
								<div class="title">
									<p><strong><?=$category["strName"]?></strong></p>
								</div>
							</div><!-- .overlay -->
						</a>
					</div><!-- .category -->
					<?php
						}
					?>
				</div><!-- . category list -->
			</div><!-- .categories -->

			<div class="share col-12 col-lg-12">
				<div class="title col-12 col-lg-5">
					<h6>Share Your Secret Menu with Us</h6>
				</div><!-- .title -->
				<div class="text col-12 col-lg-5">
					<p>You have your own secret menu?<br>Why don't you share with us?</p>
					<a class="primary-button" href="submit.php">Share Your Secret</a>
				</div><!-- .text -->
			</div><!-- .share -->

		</div><!-- .container -->

		<?php
			include("includes/footer.php");
		?>
	</div><!-- .wrapper -->
<script src="https://kit.fontawesome.com/76c00b2855.js" crossorigin="anonymous"></script>
</body>
</html>