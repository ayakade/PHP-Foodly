<?php
	include("classes/DB.php");
	include("classes/restaurants.php");
	include("classes/categories.php");
	include("classes/menus.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Share Your Secret Menu</title>
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
	
		<div class="submitHero col-12 col-12">
			<div class="heroImage"></div>
			<div class="background"></div>
			<div class="title">
				<h2>Share Your Secret Menu</h2>
				<p>You have your own secret menu?<br>Why don't you share with us?</p>
			</div><!-- .title -->
		</div><!-- .heroContainer -->

		<div class="container col-12 col-12" id="submit">
			<div class="form">
				<?php
				if (isset($_GET["error"])) {
				?>
					<!-- <p>Please fill in all required fields</p> -->
				<?php	
				}
				?>
				<form id="form" method="post" action="save.php">
					<div class="row col-12 col-6">
						<div class="fieldgroup required">
							<label>Your name *</label>
							<input type="text" name="strName" value="" />
							<div class="errorPopup">
								<p>This field is required</p>
							</div><!-- end of ferror pop up -->
						</div><!-- .fieldgroup -->
						<div class="fieldgroup required">
							<label>Your email adress *</label>
							<input type="text" name="strEmail" value="" />
							<div class="errorPopup">
								<p>This field is required</p>
							</div><!-- end of ferror pop up -->
						</div><!-- .fieldgroup -->
						<div class="fieldgroup required" >
							<label>Restaurant name *</label>
							<input type="text" name="strRestaurant" value="" />
							<div class="errorPopup">
								<p>This field is required</p>
							</div><!-- end of ferror pop up -->
						</div><!-- .fieldgroup -->
					</div><!-- .row -->
					<div class="row col-12 col-6">
						<div class="fieldgroup required">
							<label>Your secret menu *</label>
							<textarea name="strMenu" value="" /></textarea>
							<div class="errorPopup">
								<p>This field is required</p>
							</div><!-- end of ferror pop up -->
						</div><!-- .fieldgroup -->
						<input id="submit" type="submit" value="Share Your Secret Menu">
					</div><!-- .row -->
				</form>
			</div><!--  .form -->

		</div><!-- .container -->

	<?php
		include("includes/footer.php");
	?>
	</div><!-- .wrapper -->
<script src="https://kit.fontawesome.com/76c00b2855.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/validate.js"></script>
</body>
</html>