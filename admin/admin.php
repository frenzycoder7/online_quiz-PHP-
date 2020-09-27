<?php 
	include('../class/user.php');
	$admin=new user;
	extract($_POST);
	if($admin->admin_login($emal,$pwd))
	{
		$_SESSION['eml']=$emal;
		$admin->url('addquest.php');
	}
	else
	{
		$admin->url('../index.php');
	}
?>

