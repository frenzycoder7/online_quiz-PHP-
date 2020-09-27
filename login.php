<?php
	include("class/user.php");
	$signin=new user;
	extract($_POST);
	if($signin->signin($e,$p))
	{
		$signin->url("home.php");
	}
	else
	{
		$signin->url("index.php?run=failed");    /* ?var name ='containt' url variable  */
	}
?>