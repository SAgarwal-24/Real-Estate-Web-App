

<?php  
include("Connection.php");
   error_reporting(0);
   session_start();  

   $u_id=$_SESSION['uid'];

   $city=$_POST['city'];
   $state=$_POST['state'];
   $Budget=$_POST['Budget'];

   if($_POST['find'])
   {
      if($city!='' and $state=='' and $Budget=='')
      {
         $sel=" SELECT * FROM ".pro1." WHERE city='$city' ";
         $exe=mysql_query($sel);
         // echo $sel;
      }
      elseif($city=='' and $state!='' and $Budget=='')
      {
         $sel=" SELECT * FROM ".pro1." WHERE state='$state'";
         $exe=mysql_query($sel);
         // echo $sel;
      }
      elseif($city=='' and $state=='' and $Budget!='')
      {
         $sel=" SELECT * FROM ".pro1." WHERE prop_price>='$Budget'";
         $exe=mysql_query($sel);
         // echo $sel;
      }
      elseif($city!='' and $state!='' and $Budget=='')
      {
         $sel=" SELECT * FROM ".pro1." WHERE city='$city' and state='$state' ";
         $exe=mysql_query($sel);
         // echo $sel;
      }
      elseif($city!='' and $state!='' and $Budget!='')
      {
         $sel=" SELECT * FROM ".pro1." WHERE city='$city' and state='$state' and prop_price>='$Budget' ";
         $exe=mysql_query($sel);
         // echo $sel;
      }
      elseif($city=='' and $state=='' and $Budget=='')
      {
         $sel=" SELECT * FROM ".pro1." ";
         $exe=mysql_query($sel);
         // echo $sel;
      }


      
   //$fetch=mysql_fetch_array($exe);
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
<!-- ---------------------------------------===========================---------------------------------- -->

<!-- ------------======================================================------------------------------ -->


       <?php include "menu.php" ?>

<!-- --------------------------======================================================------------------------------ -->


 <div class="container">
   <div class="row fill_details">
     <form method="post">
        <div class="form-row">
          <div class="col-md-4 mb-3">
              <label for="validationDefault01"><b>City</b></label>
              <input type="text" class="form-control" placeholder="City" value="" name="city" >
          </div>
          <div class="col-md-4 mb-3">
              <label for="validationDefault01"><b>State</b></label>
              <input type="text" class="form-control" placeholder="State" value="" name="state" >
          </div>
          <div class="col-md-4 mb-3">
              <label for="validationDefault01"><b>Budget</b></label>
              <input type="text" class="form-control" placeholder="Budget" value="" name="Budget" >
          </div>   
        </div> 

        <div class="form-row">
          <div class="col-md-4 mb-3">
             <input class="btn btn-primary" name="find" type="submit" value="find">
          </div>
        </div>
     </form>
   </div>
 </div>

 


<!-- --------------------------======================================================------------------------------ -->

<form method="get">
    <div class="container">
      <div class="row fill_details"  >
        <table class="table table-hover  table-dark">
          <caption>List of users</caption>

            <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Location</th>
              <th scope="col">Price</th>
              <th scope="col">Size</th>
              <th scope="col">bed</th>
              <th scope="col">bath</th>
              <th scope="col">State</th>
              <th scope="col">city</th>
              <th scope="col">Status</th>
              <th scope="col">year</th>
              <th scope="col">Buy</th>
              <!-- <th scope="col">img1</th> -->
              <!-- <th scope="col">img2</th> -->
            </tr>
          </thead>

     <tbody>
          <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>

         
            <?php  while( $fetch=mysql_fetch_array($exe) )  { ?>
        
            <tr>
              <th scope="row"><?php echo $fetch['prop_id'] ?></th>
              <td><?php echo $fetch['location'] ?></td>
              <td><?php echo $fetch['prop_price'] ?></td>
              <td><?php echo $fetch['prop_size'] ?></td>
              <td><?php echo $fetch['bed'] ?></td>
              <td><?php echo $fetch['bath'] ?></td>
              <td><?php echo $fetch['state'] ?></td>
              <td><?php echo $fetch['city'] ?></td>
              <td><?php echo $fetch['prop_status'] ?></td>
              <td><?php echo $fetch['year'] ?></td>
              <td><a href="pay.php?payment_id=<?php echo $fetch['pid']?> ">pay</a></td>
              <!-- <td><?php echo $fetch['img1'] ?></td> -->
              <!-- <td><?php echo $fetch['img2'] ?></td> -->
            </tr>
        
            <?php  } ?>
           
          </tbody>

        </table>
      </div>
    </div>
</form>
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