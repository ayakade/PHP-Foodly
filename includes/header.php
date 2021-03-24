<div class="header col-12 col-lg-12">
	<div class="burgerMenu">
		<input type="checkbox" class="checkBox">

		<div class="bars">
			<i class="fas fa-bars"></i>
		</div>

		<div id="flyoutMenu">
		<?php
			$arrMenu = array(
				array('menu'=>'Restaurant', 'link'=>'restaurants.php'),
				array('menu'=>'Category', 'link'=>'categories.php'),
				array('menu'=>'Share Secrets', 'link'=>'submit.php')
			);
			foreach ($arrMenu as $key => $nav) {
		?>
			<a href="<?=$nav["link"]?>"><?=$nav["menu"]?></a>
		<?php
			}
		?>
		</div><!-- #flyout menu -->
	</div><!-- .burger menu -->


	<div class="logo">
		<a href="index.php"><h1>Foodly</h1></a>
	</div><!-- end of logo -->

	<nav>
	<?php
		foreach ($arrMenu as $key => $nav) {
	?>
		<a href="<?=$nav["link"]?>"><?=$nav["menu"]?></a>
	<?php
		}
	?>
	</nav><!--  nav -->
	
</div><!-- .header -->

