<?php

if(isset($_SESSION['admin_id']))
{

}
else
{

 if(basename($_SERVER['SCRIPT_FILENAME'])=="login.php"||basename($_SERVER['SCRIPT_FILENAME'])=="post.php")
 {
 	 if($_GET["act"]=="login")
 	 {

 	 }
 	 else
 	 {
 	 	location("login.php?act=login");
 	 }
 }
 else
 {
 	location("login.php?act=login");
 }


}

?>