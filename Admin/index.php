<?php include("Connection.php") ?>
<?php 
	

	session_start();

	error_reporting(0);
	$username=$_POST['user'];
	$pwd=$_POST['password'];

	if(isset($_POST['Submit']))
	{
		if($username!='' AND $pwd!='')
		{
			$sel="SELECT * FROM seller_informtion WHERE username='$username' AND password='$pwd' ";
			$exe=mysql_query($sel);
			$tot=mysql_num_rows($exe);

			$fetch=mysql_fetch_array($exe);
			

			if($tot==1)
			{
				header("location:dashboard.php");
			}
		}
		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="style.css" rel="stylesheet">
	<?php include("header_link.php") ?>
	 
</head>
<body class="body">
	<div class="container">
	<div class="main">
		<?php include('header.php') ?>


		<div class="col-md-12">
			<div class="info_box">
				<div class="col-md-12">
					<div class="Ad_news">Login Page</div>
			    </div>

			    <div class="col-md-12 sub_box">
				
			   <form method="POST">

				  <div class="form-group row">
				    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
				    <div class="col-sm-10">
				      <input type="text" name="user" class="form-control" id="inputEmail3" placeholder="Username">
				    </div>
				  </div>

				  <div class="form-group row">
				    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
				    </div>
				  </div>
				  
				  <div class="form-group row">
				    <div class="col-sm-2">Remember</div>
				    <div class="col-sm-10">
				      <div class="form-check">
				        <input class="form-check-input" name="Remember" type="checkbox" id="gridCheck1">
				        <label class="form-check-label" for="gridCheck1">
				          	Check it
				        </label>
				      </div>
				    </div>
				  </div>

				  <div class="form-group row">
				    <div class="col-sm-10">
				      <input type="submit" name="Submit" class="btn btn-primary"></input>
				    </div>
				  </div>

				</form>
			
				</div>
				<div class="clear"></div>
			</div>
		</div>
		    <div class="clear"></div>
	</div>
</div>
</body>
 <?php include("footer_link.php") ?>

</html>