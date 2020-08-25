 <?php  
include("Connection.php");
  ?>

<?php  
  session_start();
  error_reporting(0);

  $name=$_POST['username'];
  $pwd=$_POST['password'];

  if(isset($_POST['login']))
  {
    if($name!='' and $pwd!='')
    {

      $sel="SELECT * FROM user WHERE username='$name' AND password='$pwd' ";
      $exe=mysql_query($sel);
      $tot=mysql_num_rows($exe);
      $fetch=mysql_fetch_array($exe);

      if($tot==0)
      {
        ?>
          <script type="text/javascript">
            alert("Login not succeful");
          </script>
        <?php
      }

      if($tot==1)
      {
        
       $_SESSION['user_name']=$name;
       $_SESSION['uid']=$fetch['uid'];

       echo $_SESSION['user_name'];
       header("location:my_account.php");

      }

    }
  }
  
 
  
?>

<!DOCTYPE html>
<html>
<head>
	<title>Agrawal Properties</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	     <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  
       <?php include "header.php" ?>
<!-- ---------------------------------------===========================---------------------------------------------- -->

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->

<!-- --------------------------======================================================------------------- -->


       <?php include "menu.php" ?>

<!-- --------------------------======================================================------------------------------ -->
    <section id="Register">
    <div class="container">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-11 "> 
              
                <div class="row header">
                  <div class="col-md-12 log">
                    <h2>Login</h2>
                  </div>
                  
                </div>
             
           <div class="col-md-10">
            <div class="row details ">
              <form method="POST">

                <div class="row col-md-8">
                  <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" class="inp">
                  </div>
                 
               
                  <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" class="inp">
                  </div>
                </div>

                  <div class="input-group col-md-6">

                    <input type="submit" name="login" class="btn"></input>
                  </div>
              </form>
            </div>
          </div>
          </div>
          

          </div>
        </div>
      </div>
    </section>

 <!-- --------------------------======================================================------------------------------ -->

 <?php include "collections.php" ?>


 <!-- --------------------------======================================================------------------------------ -->

 <?php include "quotes.php" ?>

  <!------------------------------------------------------------------------------------------------------------------------>

   <?php include "Our_clients.php" ?>
<!--------------------------------------------------------------------------------------------------------------------------->
        
 <?php include "footer.php" ?>
 
</body>
</html>