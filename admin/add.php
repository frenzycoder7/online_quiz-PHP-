<?php
	include('../class/user.php');
	$add=new user;
	extract($_POST);
	if($_SESSION['eml'])
	{
		if($add->add_question($question,$opt1,$opt2,$opt3,$opt4,$ans,$q_cat))
		{
		 $add->url('addquest.php?q=success');
		}
	}
	else
	{
		$add->url('../index.php');
	}
?>