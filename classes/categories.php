<?php

Class Categories {
	// get category list
	public static function getCategories() 
	{
		$con = DB::con();
		$sql ="SELECT * FROM restaurantCategories";

		$results =mysqli_query($con, $sql);

		while($category= mysqli_fetch_assoc($results))
		{
			$categories[] = $category;
		}

		return $categories;
	}

	// get category title
	public static function getCategoryTitle($id) 
	{
		$con = DB::con();
		$sql ="SELECT strName 
				FROM restaurantCategories 
				WHERE id=".$_GET["cId"];

		$results =mysqli_query($con, $sql);
		$categoryTitle= mysqli_fetch_assoc($results);

		return $categoryTitle;
	}
}

?>