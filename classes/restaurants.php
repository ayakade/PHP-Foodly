<?php

Class Restaurants {

	// get restaurant list
	 public static function getRestaurants() {
		$con = DB::con();
		$sql ="SELECT * FROM restaurants";

		$results =mysqli_query($con, $sql);

		while($restaurant= mysqli_fetch_assoc($results))
		{
			$restaurants[] = $restaurant;
		}

		return $restaurants;
	}

	//get categorized restaurant list
	public static function getCategorizedRestaurants($id) {
		$con = DB::con();
		$sql ="SELECT categorizedRestaurants.restaurantCategoryId, restaurants.id,  restaurants.strName AS restaurant, restaurants.strImage, restaurantCategories.strName AS category
		FROM categorizedRestaurants
		LEFT JOIN restaurants ON categorizedRestaurants.restaurantId = restaurants.id
		LEFT JOIN restaurantCategories ON categorizedRestaurants.restaurantCategoryId = restaurantCategories.id
		WHERE restaurantCategoryId=".$_GET["cId"];

		$results =mysqli_query($con, $sql);

		while($category = mysqli_fetch_assoc($results))
		{
			$categories[] = $category;
		}

		return $categories;
	}

	// get restaurant info 
	public static function getRestaurant($id) {
		$con = DB::con();
		$sql ="SELECT * FROM restaurants WHERE id=".$_GET["id"];

		$results =mysqli_query($con, $sql);

		while($info= mysqli_fetch_assoc($results))
		{
			$restaurant[] = $info;
		}

		return $restaurant;
	}

	// get 4 ramdom restaurant 
	public static function getRandRestaurant() {
		$con = DB::con();
		$sql ="SELECT * FROM restaurants ORDER BY RAND() LIMIT 4";

		$results =mysqli_query($con, $sql);

		while($restaurant= mysqli_fetch_assoc($results))
		{
			$restaurants[] = $restaurant;
		}

		return $restaurants;
	}
}

?>