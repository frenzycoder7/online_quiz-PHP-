<?php
include("class/user.php");
$ans=new user;
if($_SESSION['cat'])
{
	$ans->answer($_POST); 
}
else
{
	$ans->url('index.php');
}
#extract($_POST);

?>