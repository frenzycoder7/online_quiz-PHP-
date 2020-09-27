<?php
	include('../class/user.php');
	$dlt=new user;
	if($_SESSION['eml'])
	{
		extract($_POST);
		if($dlt->que_dlt($dlt_cat))
		{
			$dlt->url('addquest.php?dlt=success');
		}
	}
	else
	 {
		$dlt->url('../index.php');
	}
?>