
<?php 
	include("Connection.php");

	error_reporting(0);

    $name=$_POST['username'];
    $email=$_POST['email'];
    $contact=$_POST['Contact'];
    $address=$_POST['Address'];
    $state=$_POST['State'];
    $country=$_POST['Country'];
    $city=$_POST['City'];
    $password=$_POST['password'];
    $password_1=$_POST['password_1'];

    // echo $name,$email,$contact,$password;

    
    if(isset($_POST['Register_btn']))
    {
    	if($name!="" and $email!="" and $contact!="" and $address!="" and  $state!="" and  $country!="" and  $pincode!="" and $city!="" and
    	      $password!="" and  $password_1!="")
    	{
    		if($password==$password_1)
    		{
    		    	 $ins=" INSERT INTO ".user." SET "."username='$name',email='$email',contact='$contact',address='$address',
    		    	                                      state='$state',
    			                             country='$country',pincode='$pincode',city='$city',password='$password',
    			                              confirm='$password_1' ";

    			mysql_query($ins);
    			echo $ins;
    			
    		}
    	}
    }

?>



<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>

	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
 <!-- --------------------------======================================================------------------------------ -->

<body>

	 <section id="title" >
            <div class="container ">
                <div class="container-fluid">
                	<div class="row">
                		<div class="col-md-6">
                			<img src="images/Agarwal_logo.jpg">
                		</div>

                                <div class="col-md-4">  </div>
                                <!-- <div class="col-md-2 login"> 
                                        <div class="row">
                                            <div class="col-md-6">Login </div>
                                           <div class="col-md-6">Sign Up</div> 
                                        </div>      
                              </div> -->

                		
                	</div>
                </div>
           </div>
        </section>
 <!-- --------------------------======================================================------------------------------ -->

     <?php include "menu.php" ?>
 <!-- --------------------------======================================================------------------------------ -->

<section id="Register">
    <div class="container">
        <div class="container-fluid">
        	<div class="row">
	        	<div class="row header">
						<h2><center>Registration</center></h2>
			    </div>

			    <div class="row details">
					<form method="post">
						<div class="input-group">
							<label>Username</label>
							<input type="text" name="username" class="inp">
						</div>

						<div class="input-group">
							<label>Email</label>
							<input type="text" name="email" class="inp">
						</div>

						<div class="input-group">
							<label>Contact no</label>
							<input type="number" name="Contact" class="inp">
						</div>

						<div class="input-group">
							<label>Address</label>
							<input type="text" name="Address" class="inp">
						</div>

						<div class="input-group">
							<label>State</label>
							<input type="text" name="State" class="inp">
						</div>

						<div class="input-group">
							<label>Country</label>
							<input type="text" name="Country" class="inp">
						</div>

						<div class="input-group">
							<label>Pincode</label>
							<input type="text" name="Pincode" class="inp">
						</div>

						<div class="input-group">
							<label>City</label>
							<input type="text" name="City" class="inp">
						</div>

						<div class="input-group">
							<label>Password</label>
							<input type="password" name="password" class="inp">
						</div>

						<div class="input-group">
							<label>Confirm Password</label>
							<input type="password" name="password_1" class="inp">
						</div>

						<div class="input-group" >
							<button type="submit" name="Register_btn" class="btn" style="font-weight: bold;">Register</button>
						</div>

					   <p style="font-weight: bold;">
					   	   Already a member? <a href="login.php">Sign in</a>
					   </p>
					</form>
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

  <!-------------------------------------------------------------------------------------------------------------------------------->

       
   <?php include "Our_clients.php" ?>
<!--------------------------------------------------------------------------------------------------------------------------->
        
  <?php include "footer.php" ?>

</body>
</html>