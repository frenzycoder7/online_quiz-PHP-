<?php
include('../class/user.php');
$addquestion=new user;
if(isset($_GET['q'])&& $_GET['q']=='success')
    {
      ?>
        <script>
            alert("Your Are registered successfully");
        </script>
      <?php 
    }
if($_SESSION['eml'])
{?>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<?php
		if(isset($_GET['dlt']) && $_GET['dlt']=='success')
		{
			?>
			<script type="text/javascript">
				alert('Question Deleted.....');
			</script>
			<?php
		} 
	?>
	<center>
		<h1><strong style="color: darkgreen;">Add Questions..</strong></h1>
	</center><hr><br><br><br>
	<form action="add.php" method="post">
		<strong style="color: red;">Questions</strong><br><input class="form-control form-control-lg" type="text" name="question" placeholder="Type Questions here">
		<br>
		<br>
		<strong style="color: lightpink;">Add Options</strong><br><br>
		<input class="btn btn-dark" type="text" name="opt1" placeholder="Add opt 1"><br><br>
		<input class="btn btn-dark" type="text" name="opt2" placeholder="Add opt 2"><br><br>
		<input class="btn btn-dark" type="text" name="opt3" placeholder="Add opt 3"><br><br>
		<input class="btn btn-dark" type="text" name="opt4" placeholder="Add opt 4"><br><br>
		<input class="btn btn-dark" type="text" name="ans" placeholder="Annswer"><br><br>
		<select name="q_cat">
			<option value="1">PHP</option>
			<option value="2">HTML</option>
			<option value="3">JAVA</option>
			<option value="4">CSS</option>
		</select>

		<center><input type="submit" class="btn btn-primary" value="Add Question" name=""></center>
		<center><a href="../logout.php">logout</a></center>
	</form>
	<form action="dlt.php" method="post">
		<h2>Select catogary of question</h2>
		<select name="dlt_cat">
			<option value="1">PHP</option>
			<option value="2">HTML</option>
			<option value="3">JAVA</option>
			<option value="4">CSS</option>
		</select>
		<button type="submit" class="btn btn-primary">Delete Question</button>
	</form>
</div>
</body>
</html>
 <?php

}
else 
{
	$addquestion->url('../index.php');
}
?>
