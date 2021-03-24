<?php

// connect to db
Class DB {
	public static function con() {
		return mysqli_connect("localhost", "root", "root", "foodly");
	}
}

?>