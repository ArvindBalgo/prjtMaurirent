<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08/02/2016
 * Time: 00:23
 */

 if (isset($_POST['submit'])){

 $username = mysql_escape_string($_POST['username']);
 $password = mysql_escape_string($_POST['password']);

 if ($username&&$password)
 {

 	$connect = mysql_connect("localhost", "root", "") or die("Could not connect");
 	mysql_select_db("maurirent") or die("Could not find db");

 }
 else
 	die("Please enter a username and password");

 $sql= mysql_query("SELECT * FROM `users` where `username` = '$username' AND `password` = '$password'");
 if(mysql_num_rows($sql) > 0)
 {
 	echo ("Login Successfully");
 	exit();
 }
 else{
 	echo ("Incorrect login!!! Please try again");
 	exit();
 }
 }

 ?>