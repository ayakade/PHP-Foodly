<?php

include("classes/DB.php");
include("classes/submit.php");

$success = Submit::saveMenu($_POST["strName"], $_POST["strEmail"], $_POST["strRestaurant"], $_POST["strMenu"]);

if($sussess) {
	header("location: submit.php?success");

} else {
	header("location: submit.php?error");
}

?>