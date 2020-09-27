<?php
	include("class/user.php");
	$register=new user;
	extract($_POST);
	$img_tmp=$_FILES['i']['tmp_name'];
	$file_path="image/".$n.".jpg";
	move_uploaded_file($img_tmp,$file_path);
	$query="INSERT INTO `signup`(`name`, `email`, `password`, `images`) VALUES ('$n','$e','$p','$file_path')";
	#$register->signup($query);
	if($register->signup($query))
	{
		$register->url("index.php?run=success");
	}
/* object orianted programming	
	class model
	{
		public $number;
		function car($number)
		{
			$this->number;
		echo "my car number is".$number;
		}
		
	}
	$figo=new model();
	$suzuki=new model();
	$honda=new model();

	$figo->car(' figo br017887 </br>');
	$suzuki->car(' suzuki br0178689');
	$honda->car(' honda br018988');
*/
?>