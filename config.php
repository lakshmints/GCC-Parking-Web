<?php
define("SITE_URL","http://localhost/gccparking/");
define("SITE_NAME","gccparking");
define("DB_HOST","localhost" );
define("DB_USER","root" );
define("DB_PASS","nts@digital" );
define("DB_NAME","parkingapp");
define("SEND_ERRORS_TO","developersnts@gmail.com" );
define("DISPLAY_DEBUG", false );
error_reporting(0); 
date_default_timezone_set("Asia/Kolkata");
//Database
require_once('class.db.php');
mysqli_query("SET NAMES utf8;");
mysqli_query("SET CHARACTER_SET 	utf8mb4_bin;");
$db = new DB();
$con=mysqli_connect("localhost","root","nts@digital","parkingapp"); 

?>


