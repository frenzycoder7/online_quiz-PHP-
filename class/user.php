<?php
		session_start();
		class user
		{
			public $host="localhost";
			public $user="root";
			public $pass="";
			public $db="quiz";
			public $con;
			public $data;
			public $que;
			
			public function __construct()
			{
				$this->con=new mysqli($this->host,$this->user,$this->pass,$this->db);
				if($this->con->connect_errno)
				{
					die('Connection faild'.$this->con->connect_errno);
				}

			}
			public function signup($data)
			{
				$this->con->query($data);
				return true;
			}
			public function url($url)
			{
				header('location:'.$url);
			}
			public function signin($eml,$pwd)
			{
				$query=$this->con->query("SELECT `email`, `password` FROM `signup` WHERE `email`='$eml' AND `password`='$pwd'");

				$query->fetch_array(MYSQLI_ASSOC);
				if($query->num_rows >0)
				{
					$_SESSION['email']=$eml;
					return true;

				}
				else
				{
					return false;
				}
			}
			public function user_profile($email)
			{
				$query=$this->con->query("SELECT * FROM `signup` WHERE `email`='$email'");

				$row=$query->fetch_array(MYSQLI_ASSOC);
				if($query->num_rows >0)
				{
					$this->data[]=$row;
					return $this->data;
				}
				return $this->data;
			}
			public function cat_show()
			{
				$query=$this->con->query('SELECT * FROM `category`');
				while($row=$query->fetch_array(MYSQLI_ASSOC))
				{
					$this->cat[]=$row;
					
				}
				return $this->cat;
				
			}
			public function question($cate)
			{
				$query=$this->con->query("SELECT * FROM `question` WHERE `question_cat`='$cate'");
				if($query->num_rows>0)
				{
					while($row=$query->fetch_array(MYSQLI_ASSOC))
					{
						$this->que[]=$row;
					}
					return $this->que;
				}
				else
				{
					return false;
				}
				
			}
			public function answer($post)
			{	
				$ans=implode("",$post);
				
				$right=0;
				$wrong=0;
				$noattempt=0;
				$query=$this->con->query("SELECT `id`, `answer` FROM `question` WHERE  `question_cat`='".$_SESSION['cat']."'");
				while ($key3=$query->fetch_array(MYSQLI_ASSOC)) 
				{
					if($key3['answer']==$_POST[$key3['id']])
					{
						$right++;

					}
					elseif ($_POST[$key3['id']]=="no attampt")
					 {
					 	$noattempt++;
					}
					else
					{
						$wrong++;
					}

				}
				?>
				<!DOCTYPE html>
				<html>
				<head>
					<title></title>
					<meta charset="utf-8">
					  <meta name="viewport" content="width=device-width, initial-scale=1">
					  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
					  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
					  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
				</head>
				<body>
					<center>
						<div class="text-ceter">
							<h1 style="color: green;"><strog>Right Answer:-</strog> <?php echo $right; ?></h1><hr>
							<h1 style="color: red;"><strong>Wrong Answer:-</strong><?php echo $wrong; ?></h1><hr>
							<h1 style="color: yellow;"><strong>No Attampt:-</strong><?php echo $noattempt; ?></h1><hr>	
							<h1 style="color: pink;"><strong>Total Questions:-</strong>	<?php echo $right+$wrong+$noattempt; ?></h1><hr>			
						</div>
					</center>
					<div class="container">
					  <center><h1><strong>Quiz Result</strong></h1></center>
					  <center>
						  <table class="table">
						   <tr><td>Name:-</td><td><strong style="color: gray;"><?php echo $_SESSION['n']; ?></strong></td></tr>
						   <tr><td>User Photo</td><td><img src="<?php echo $_SESSION['img']; ?>" height="50" width="50"></td></tr>
						   <tr><td>Total Questions:-</td><td><strong style="color: yellow;"><?php echo $right+$wrong+$noattempt; ?></strong></td></tr>
						   <tr><td>Righ Questions:-</td><td><strong style="color: green;"><?php echo $right; ?></strong></td></tr>
						   <tr><td>Wrong Question:-</td><td><strong style="color: red;"><?php echo $wrong; ?></strong></td></tr>
						   <tr><td>Persentage:-</td><td>
						   	
						   	<?php
						   		$p=($right/($right+$wrong+$noattempt))*100;
						   		if($p>=0 && $p<10)
						   		{
						   			$grade='F';
						   			$cmnt="fail";
						   			?>
						   				<strong style="color: red;"><?php echo $p."%"; ?></strong>&nbsp; &nbsp;
						   				Grade:-<strong style="color: red;"> <?php echo $grade."\n".$cmnt; ?></strong>
						   			<?php 
						   		}
						   		if($p>=10 && $p<=20)
						   		{
						   			$grade='E';
						   			$cmnt="Not Bad! You Need More Practice";
						   			?>
						   				<strong style="color: red;"><?php echo $p."%"; ?></strong>&nbsp; &nbsp;
						   				Grade:-<strong style="color: red;"> <?php echo $grade."\n".$cmnt; ?></strong>
						   			<?php 
						   		}
						   		if($p>=20 && $p<=40)
						   		{
						   			$grade='D';
						   			?>
						   				<strong style="color: pink;"><?php echo $p."%"; ?></strong>&nbsp; &nbsp;
						   				Grade:-<strong style="color: pink;"> <?php echo $grade; ?></strong>
						   			<?php 
						   		}
						   		if($p>=40 && $p<=60)
						   		{
						   			$grade='C';
						   			?>
						   				<strong style="color: yellow;"><?php echo $p."%"; ?></strong>&nbsp; &nbsp;
						   				Grade:-<strong style="color: yellow;"> <?php echo $grade; ?></strong>
						   			<?php 
						   			
						   		}
						   		if($p>=60 && $p<=80)
						   		{
						   			$grade="B";
						   			?>
						   				<strong style="color: brown;"><?php echo $p."%"; ?></strong>&nbsp; &nbsp;
						   				Grade:-<strong style="color: brown;"> <?php echo $grade; ?></strong>
						   			<?php 

						   		}
						   		if($p>80 && $p<100)
						   		{
						   			$grade="A";
						   			?>
						   				<strong style="color: lightgreen;"><?php echo $p."%"; ?></strong>&nbsp; &nbsp;
						   				Grade;-<strong style="color: lightgreen;"> <?php echo $grade; ?></strong>
						   			<?php 
						   		}
						   		if($p==100)
						   		{
						   			$grade="A++";
						   			?>
						   				<strong style="color: green;"><?php echo $p."%"; ?></strong>&nbsp; &nbsp;
						   				Grade:-<strong style="color: green;"> <?php echo $grade; ?></strong>
						   			<?php 
						   		}

						   	 ?>

						   </td></tr>
						  </table>
						 <a href="home.php"><button type="button">Back</button></a>
					  </center>
				</div>
				
				</body>
				</html>
				
				
				<?php
			}
			public function admin_login($e,$p)
			{
				if($e=="admin001@gmail.com" && $p=="welcomeadmin")
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			public function add_question($que,$o1,$o2,$o3,$o4,$a,$c)
			{
				$query=$this->con->query("INSERT INTO `question`(`questions`, `opt_1`, `opt_2`, `opt_3`, `opt_4`, `answer`, `question_cat`) VALUES ('$que','$o1','$o2','$o3','$o4','$a','$c')");
				if($query)
				{
					return true;
				}
			}
			public function que_dlt($cat)
			{
				$query=$this->con->query("DELETE FROM `question` WHERE `question_cat`='$cat'");
				if($query)
				{
					
					return true;
				}
			}
			
		}
?>