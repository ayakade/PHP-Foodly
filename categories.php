<?php
	include("classes/DB.php");
	include("classes/restaurants.php");
	include("classes/categories.php");
	include("classes/menus.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Categories</title>
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

		<div class="container col-12 col-lg-12" id="categories">
			<h2>Categories</h2>
			<div class="categories col-12 col-lg-12">
			<?php
				$categories = Categories::getCategories();
				foreach ($categories as $category) {
			?>
				<a class="category col-6 col-lg-4" href="category.php?cId=<?=$category["id"]?>">
					<img src="imgs/<?=$category["strImage"]?>" alt="<?=$category["strImage"]?>">
					<h3><?=$category["strName"]?></h3>
					<div class="primary-button">Unlock Secrets</div>
				</a><!-- .category -->
			<?php
				}
			?>
			</div><!-- .categories -->

		</div><!-- . container -->

		<?php
			include("includes/footer.php");
		?>
	</div><!-- end of wrapper -->
<script src="https://kit.fontawesome.com/76c00b2855.js" crossorigin="anonymous"></script>
</body>
</html>