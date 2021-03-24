<?php

Class Submit {
	// save submited menu to db
	public static function saveMenu($strEmail, $strName, $strRestaurant, $strMenu) 
	{
		if($strEmail && $strName && $strRestaurant && $strMenu) {
			$con = DB::con();
			$sql = "INSERT INTO submits(strName, strEmail, strRestaurant, strMenu) 
					values ('".$strEmail."', '".$strName."', '".$strRestaurant."', '".$strMenu."')";

			return mysqli_query($con, $sql);
		}
	}
}

?>