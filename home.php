<?php
  include("class/user.php");
  $profile=new user;
  $email=$_SESSION['email'];
  if($email)
  {
    $profile->user_profile($email);
  }
  else
  {
    $profile->url('index.php');
  }
  #print_r($profile->data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quiz Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Quiz In PHP</h2>
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#profile">Profile</a></li>
    <li style=" float: right;"><a data-toggle="tab" href="#Logout">Log Out</a></li>
  </ul>

  <div class="tab-content">
            <div id="home" class="tab-pane fade in active">
              <h3 style="color:darkgreen;">HOME</h3>
              <center>
                <button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Start Quiz </button>
              </center><br>
                   <div id="select" class="tab-pane fade" >
                      <div class="col-sm-4"></div>
                      <div class="col-sm-4">

                        <form action="question.php" method="post">
                            <select class="form-control " id="sel1" name="cat">
                              <?php 
                              $profile->cat_show();
                              foreach ($profile->cat as $key1) 
                              {
                                ?>
                                  <option value="<?php echo $key1['id']; ?>"><?php echo $key1['cat_name']; ?></option>
                                <?php
                              }
                              ?>
                            </select>
                          <center><button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button></center> 
                          </form>
                      </div>
                    
                     <div class="col-sm-4"></div>
                   </div>
            </div>
            <div id="profile" class="tab-pane fade">
              <h3>Profile</h3>
              <div class="container">
                <h2>Welcome</h2>         
                <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Images</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        foreach ($profile->data as $key) 
                        { 
                          ?>
                            <tr>
                              <td><?php echo $key['name']; ?></td>
                              <td><?php echo $key['email']; ?></td>
                              <td><img src="<?php echo $key['images'] ?>" height="50" width="50" /></td>
                            </tr>
                          <?php
                        }
                        $name=$key['name'];
                        $image=$key['images'];
                        $_SESSION['n']=$name;
                        $_SESSION['img']=$image;
                        ?>
                    </tbody>
                </table>
              </div>
            </div>
              <div class="tab-pane fade" id="Logout">
                <a href="logout.php"><button class="btn btn-primary" > Log out</button></a>
              </div>
    </div>
</div>

</body>
</html>
