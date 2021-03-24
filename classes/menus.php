<?php

Class Menu {
	// get menu
	public static function getMenu($id) {
		$con = DB::con();
		$sql ="SELECT DISTINCT foods.strName AS menu, foods.strImage AS image, foods.strDescription, foods.strOrder
			FROM  menus 
			LEFT JOIN restaurants ON menus.categorizedRestaurantId = restaurants.id
			LEFT JOIN foods ON menus.foodId = foods.id
			WHERE restaurants.id=".$_GET["id"];

		$results = mysqli_query($con, $sql);

		while($menu= mysqli_fetch_assoc($results))
		{
			$menus[] = $menu;
		}

		return $menus;
	}

	// get 3 ramdom menu
	public static function getRandMenu() {
		$con = DB::con();
		$sql ="SELECT DISTINCT restaurants.id, restaurants.strName, foods.strName AS menu, foods.strImage AS image, foods.strDescription, foods.strOrder,
			RAND() AS sorter
			FROM  menus 
			LEFT JOIN restaurants ON menus.categorizedRestaurantId = restaurants.id
			LEFT JOIN foods ON menus.foodId = foods.id
	        ORDER BY sorter
	        LIMIT 0, 3";

	    $results = mysqli_query($con, $sql);

		while($menu= mysqli_fetch_assoc($results))
		{
			$menus[] = $menu;
		}

		return $menus;
	}
}


?>