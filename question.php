<?php
include("class/user.php");
$question=new user;
$cat=$_POST['cat'];
$_SESSION['cat']=$cat;

if($_SESSION['cat'])
{
	if($question->question($cat))
	{
		
	}
	else
	{
		$question->url('home.php');
	}

}
else
{
	$question->url('index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Questions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  	
  	function timeout()
  	{
  		// body...
  		var min= Math.floor(timeleft/60);
  		var sec= timeleft%60;
  		if(timeleft<=0)
  		{
  			clearTimeout(tm);
  			document.getElementById('form1').submit();
  		}
  		else
  		{
  			document.getElementById('time').innerHTML=min+":"+sec;
  		}
  		timeleft--;
  		var tm=setTimeout(function(){timeout()},1000);
  	}
  </script>
</head>
<body onload="timeout()">
	<div class="col-sm-2"></div>


	<div class="col-sm-8">
		<center><h2>Online Quiz
			<script type="text/javascript">
				var timeleft=1*60;
			</script>
			<div id="time" style="float: right;">timeout </div>
		</h2></center>
		<form action="answer.php" method="POST" id="form1">
			<div class="container">            
			  <table class="table table-hover">
			  	<?php
			  		$i=1;
			  	foreach ($question->que as $key3)
			  	 {?>
			  	 	<thead>
			      <tr>
			        <th class="info"><?php echo $i; ?>)&nbsp;<?php echo $key3['questions'] ?></th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php if(isset($key3['opt_1']))
			    		{?>
					      <tr>
					        <td><input type="radio" name="<?php echo $key3['id'] ?>" value="0"><?php echo $key3['opt_1']; ?></td>
					      </tr>
					     <?php
					    }
					 ?>
					 <?php if(isset($key3['opt_2']))
					 	{?>
					 		<tr>
			        			<td><input type="radio" name="<?php echo $key3['id'] ?>" value="1"><?php echo $key3['opt_2']; ?></td>
			     			 </tr>
			     		<?php
					 	}
					 ?>
					 <?php if(isset($key3['opt_3']))
						 {?>
						 	<tr>
				        		<td><input type="radio" name="<?php echo $key3['id'] ?>" value="2"><?php echo $key3['opt_3'] ?></td>
				     		 </tr>
				     	<?php
						 }
					?>
					<?php 
						if(isset($key3['opt_4']))
						{?>
							<tr>
					       		 <td><input type="radio" name="<?php echo $key3['id'] ?>" value="3"><?php echo $key3['opt_4']; ?></td>
					     	 </tr>
					     <?php
						}
					?>
					 <tr>
					 	<td>
					 		<input type="radio" checked="checked" name="<?php echo $key3['id'] ?>" value="no attampt" style="display: none;">
					 	</td>
					 </tr>
			  </tbody>
			  	  <?php
			  		$i++; # code...
			  	}
			   ?> 

				</table>
				<center><input type="submit"   value="Submit quiz" class="btn btn-primary"></center>
			</div>
		</form>
	</div>


	<div class="col-sm-2"></div>
</body>
</html>