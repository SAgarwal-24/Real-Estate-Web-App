

<?php  
include("Connection.php");
  error_reporting(0);
   session_start();
 
   $p=$_GET['payment_id'];
  // echo $p;

   $sel=" SELECT * FROM ".pro1." WHERE pid='$p' ";
   $exe=mysql_query($sel);
   $fetch=mysql_fetch_array($exe);

  //echo $fetch['img1'];

 // $photo='Uploaded_Images/'.$fetch['img1'];
 // echo $photo;
 // echo $sel;
  
?>

<!DOCTYPE html>
<html>
<head>

	<title>Paymet Portal</title>
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



<!-- --------------------------======================================================------------------------------ -->


       <?php include "menu.php" ?>

<!-- --------------------------======================================================------------------------------ -->
       
  <section id="Register">
    <div class="container">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2 ">
            
              
            </div>

            <div class=" col-md-10 ">

                   <div class="row">
                      <div class="row header">
                      <h2><center>Owner Information</center></h2>
                    </div>

                    <div class="row details ">
                    <form method="post">
                      <div class="input-group pay">
                        <label>Ownername</label>
                        <input type="text" name="username" class="inp" value="<?php echo $fetch['owner']?>" disabled>
                      </div>

                      <div class="input-group">
                        <label>Email</label>
                        <input type="text" name="email" class="inp" value="<?php echo $fetch['email_id'] ?>" disabled>
                      </div>

                      <div class="input-group">
                        <label>Contact no</label>
                        <input type="number" name="Contact" class="inp" value="<?php echo $fetch['mobile_no'] ?>" disabled>
                      </div>

                      <div class="input-group">
                        <label>Address</label>
                        <input type="text" name="Address" class="inp" value="<?php echo $fetch['location'] ?>" disabled>
                      </div>


                      <div class="input-group">
                        <label>Price</label>
                        <input type="text" name="Address" class="inp" value="<?php echo $fetch['prop_price'] ?>" disabled>
                      </div>


                      <div class="input-group">
                        <label>Size</label>
                        <input type="text" name="Address" class="inp" value="<?php echo $fetch['prop_size'] ?>" disabled>
                      </div>

                      <div class="input-group">
                        <label>State</label>
                        <input type="text" name="State" class="inp" value="<?php echo $fetch['state'] ?>" disabled>
                      </div>

                      <div class="input-group">
                        <label>City</label>
                        <input type="text" name="Country" class="inp" value="<?php echo $fetch['city'] ?>" disabled>
                      </div>

                      <div class="input-group">
                        <label>Pincode</label>
                        <input type="text" name="Pincode" class="inp" value="<?php echo $fetch['pincode'] ?>" disabled>
                      </div>

                        <div class="input-group">
                          <label>Property Status</label>
                          <input type="text" name="City" class="inp" value="<?php echo $fetch['prop_status'] ?>" disabled >
                        </div>

                        
                      </form>
                    </div>
               </div>
               
            </div>


             </div>
           </div>
         </div>


 <!-- --------------------------======================================================------------------------------ -->

  <section id="Register">
    <div class="container">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2 ">
            
              
            </div>

            <div class=" col-md-10 ">

                   <div class="row">
                      <div class="row header">
                      <h2><center>Pay</center></h2>
                    </div>

                    <div class="row details ">
                    <form method="post">
                      <div class="input-group pay">
                        <label>Ownername</label>
                        <input type="text" name="username" class="inp" value="" >
                      </div>

                      <div class="input-group">
                        <label>Email</label>
                        <input type="text" name="email" class="inp" value="">
                      </div>

                      <div class="input-group">
                        <label>Contact no</label>
                        <input type="number" name="Contact" class="inp" value="" >
                      </div>

                      <div class="input-group">
                        <label>Address</label>
                        <input type="text" name="Address" class="inp" value="" >
                      </div>

                      <div class="input-group">
                        <label>State</label>
                        <input type="text" name="State" class="inp" value="" >
                      </div>

                      <div class="input-group">
                        <label>City</label>
                        <input type="text" name="Country" class="inp" value="" >
                      </div>

                      <div class="input-group">
                        <label>Pincode</label>
                        <input type="text" name="Pincode" class="inp" value="" >
                      </div>

                       <div class="input-group">
                          
                          <input type="submit" name="" class="inp" >
                        </div>

                      </form>
                    </div>
               </div>
               
            </div>

 <?php include "collections.php" ?>


 <!-- --------------------------======================================================------------------------------ -->

 <?php include "quotes.php" ?>

  <!------------------------------------------------------------------------------------------------------------------------>

   <?php include "Our_clients.php" ?>
<!--------------------------------------------------------------------------------------------------------------------------->
        
 <?php include "footer.php" ?>
 
</body>
</html>