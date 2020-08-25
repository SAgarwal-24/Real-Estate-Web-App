<?php  
  include("Connection.php");
  error_reporting(0);
  session_start();
 
   
  //echo $_SESSION['user_name'];
  $u_id=$_SESSION['uid'];
  // echo "Gyu";
  // echo $_SESSION['uid'];
  //echo $_SESSION['uid'];


    $name=$_POST['Owner_name'];
	$mobile_no=$_POST['mobile_no'];
   // echo $mobile_no;

	$email=$_POST['mail'];
	$username=$_POST['username'];

  $address=$_POST['Address'];
 	$city=$_POST['City'];
 	$state=$_POST['State'];
 	$pincode=$_POST['Pincode'];

  $prop_status=$_POST['prop_type'];
  $price=$_POST['price'];
  $area=$_POST['Area'];
  $year=$_POST['year_built'];


    $name1=$_FILES['gimage1']['name'];
	$tmp_name1=$_FILES['gimage1']['tmp_name'];
	$path1="Uploaded_Images/".$name1;
	move_uploaded_file(	$tmp_name1, $path1);



	$name2=$_FILES['gimage2']['name'];
	$tmp_name2=$_FILES['gimage2']['tmp_name'];
	$path2="Uploaded_Images/".$name2;
	move_uploaded_file(	$tmp_name2, $path2);

	// echo $name1."<br><br>";
	// echo $name2."<br><br>";

  $bed=$_POST['Bedrooms'];
  $bath=$_POST['Bathrooms'];

  //echo $bed;
 
 //echo "<br><br>";

$edit_id=$_GET['nid'];
 
  // echo $edit_id;

// $sel = "Select * from city where s_id IN (select s_id from state where s_id = 1)";
// $exe = mysql_query($sel);
// while($fetch  = mysql_fetch_array($exe))
// {
// 	echo $fetch['city_name'];
// 	echo "<br>";
// }
// echo "<pre>";
// print_r($fetch);
// echo "</pre>";
// die;


if($edit_id=="")
{
	if(isset($_POST['Submit']))
	{	
	   if( $name!="" and $mobile_no!="" and $price!="" and $area!="" )
		{
		  $ins = "INSERT INTO ".pro1." ( uid,owner,mobile_no,email_id,prop_price,bed,bath,prop_size,location,state,city,pincode,prop_status,year,img1,img2) 
			   VALUES ('$u_id','$name','$mobile_no','$email','$price','$bed','$bath','$area','$address','$state','$city','$pincode','$prop_status','$year',' $name1',' $name2')";

	        mysql_query($ins);  echo $ins;
			header("location:Rent.php");
			exit();
		}
	 }
}
else
 {

 	$sel1=" SELECT * FROM ".pro1." WHERE pid='$edit_id' ";
 	$exe1=mysql_query($sel1);
 	$fetch1=mysql_fetch_array($exe1);

 	// echo $sel1;

     if($edit_id!="")
     {
     	if(isset($_POST['Edit']))
     	{
     		$upd=" UPDATE pro1 
            SET owner='$name',uid='$u_id',mobile_no='$mobile_no',email_id='$email',prop_price='$price',bed='$bed',bath='$bath',prop_size='$area',location='$address',state='$state',city='$city',pincode='$pincode',prop_status='$prop_status',year='$year',img1='$name1',img2='$name2' WHERE pid='$edit_id' ";
           mysql_query($upd);
           header("location:Rent.php");
			exit();
     	}
     	
     }
  
 }


  $sel=" SELECT * FROM ".pro1." WHERE uid='$u_id'";
  //echo $sel."<br><br>";

  $exe=mysql_query($sel);
  // echo $sel;
  //$fetch=mysql_fetch_array($exe);
 

  
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['user_name'] ?></title>
	<?php include "head_link.php" ?>
	
</head>
<body>
       <?php include "header.php" ?>
<!-- ---------------------------------------===========================---------------------------------------------- -->




<div class="container">
	<div class="row">
       <form  class="fill_details" method="post"  enctype="multipart/form-data">

			            <!-- ------------------------------------------ Owner Details  ------------------------------------------ -->
				  <div class="form-row">
				  	<div class="row col-md-12 topic">
				  	       Owner Details
				  	</div>
				    <div class="col-md-3 mb-3">
				      <label for="validationDefault01">Owner name</label>
				      <input type="text" class="form-control" id="validationDefault01" value="<?php echo $fetch1['owner'] ?>" name="Owner_name" >
				    </div>

				    <div class="col-md-3 mb-3">
				      <label for="validationDefault01">Mobile no</label>
				      <input type="number" class="form-control" id="validationDefault01" value="<?php echo $fetch1['mobile_no']?>" name="mobile_no"  >
				    </div>

				    <div class="col-md-3 mb-3">
				      <label for="validationDefault01">Email Id</label>
				      <input type="Email" class="form-control" id="validationDefault01" value="<?php echo $fetch1['email_id']?>" placeholder="mail@gmail.com" name="mail" >
				    </div>
				    
				    <div class="col-md-3 mb-3">
				     
				    </div>

				  </div>


                            <!-- --------------------------------- Property Location  -------------------------------------------- -->
				  <div class="dropdown-divider"></div>

				  <div class="form-row">
				  	<div class="row col-md-12 topic">
				  	       Property Location
				  	</div>
				  	<div class="col-md-3 mb-3">
				      <label for="validationDefault03">Address</label>
				      <input type="text" class="form-control" id="validationDefault03" name="Address" value="<?php echo $fetch1['location']?>" placeholder="Address" >
				    </div>
				    <div class="col-md-3 mb-3">
				      <label for="validationDefault03">City</label>
				      <input type="text" class="form-control" id="validationDefault03" name="City" value="<?php echo $fetch1['city']?>" placeholder="City" >
				    </div>
				    <div class="col-md-3 mb-3">
				      <label for="validationDefault04">State</label>
				      <input type="text" class="form-control" id="validationDefault04" name="State"  value="<?php echo $fetch1['state']?>" placeholder="State" >
				      <!-- <select name="state">
				      	<option>State</option>
				      	<option value="1">rajsthan</option>
				      	<option value="3">gujrat</option>
				      </select> -->
				    </div>
				    <div class="col-md-3 mb-3">
				      <label for="validationDefault05">Pincode</label>
				      <input type="text" class="form-control" id="validationDefault05"  name="Pincode" value="<?php echo $fetch1['pincode']?>" placeholder="Pincode" >
				    </div>
				  </div>

				  <div class="dropdown-divider"></div>

				    <!-- ------------------------------------------ Property Type  ------------------------------------------ -->

				   <div class="form-row ">
					  	<div class="row col-md-12 topic">
					  	       Property Type
					  	</div>

					  	<div class="row col-md-12">
					  		
							  	<div class="input-group col-md-3 mb-3 "  >
								  <select class="custom-select" id="prop_type"  name="prop_type">
								    <option selected>Sell/Rent</option>
								    <option value="Sell">Sell</option>
								    <option value="Rent">Rent</option>
								  </select>
								</div>

							   
		 
							<div class="col-md-3 mb-3">
						      <label for="validationDefault05">Price</label>
						      <input type="number" step="any" value="<?php echo $fetch1['prop_price'] ?>" class="form-control" id="validationDefault05" name="price" placeholder="Price" >
						    </div>			    
								

						</div>
					</div>

				  <div class="dropdown-divider"></div>
            
              <!-- ------------------------------------------ Property Details  ------------------------------------------------ -->


				 <div class="form-row ">
					  	<div class="row col-md-12 topic">
					  	       Property Details
					  	</div>

					  	<div class="row col-md-12">
					  		
					  	<div class="col-md-3 mb-3">
					      <label for="validationDefault05">Area(sq. feet)</label>
					      <input type="number" step="any" value="<?php echo $fetch1['prop_size'] ?>" class="form-control" id="validationDefault05" name="Area" placeholder="Area" >
					    </div>	

					    <div class="col-md-3 mb-3">
					      <label for="validationDefault05">Bedrooms</label>
					      <input type="text" step="any" value="<?php echo $fetch1['bed'] ?>" class="form-control" id="validationDefault05" name="Bedrooms" placeholder="" >
					    </div>			
 
						<div class="col-md-3 mb-3">
					      <label for="validationDefault05">Bathrooms</label>
					      <input type="text" step="any" value="<?php echo $fetch1['bath'] ?>" class="form-control" id="validationDefault05" name="Bathrooms" placeholder="" >
					    </div>

				    <div class="col-md-3 mb-3">
				      <label for="validationDefault05">Year Built</label>
				      <input type="text" step="any" value="<?php echo $fetch1['year'] ?>" class="form-control" id="validationDefault05" name="year_built" placeholder="eg: 2010" >
				    </div>			    
	

						</div>
					</div>

				  <div class="dropdown-divider"></div>

        <!-- ------------------------------------------ Gallery   ------------------------------------------------ -->

        <div class="form-row ">
					  	<div class="row col-md-12 topic">
					  	       Gallery
					  	</div>

					  	<div class="row col-md-12">
					  		
					  		 <div class="form-group col-md-3 mb-3">
							    <label for="exampleFormControlFile1">image 1</label>
							    <input type="file" name="gimage1" value="<?php echo $fetch1['img1'] ?>" class="form-control-file" id="exampleFormControlFile1">
							 </div>

							  <div class="form-group col-md-3 mb-3">
							    <label for="exampleFormControlFile2">image 2</label>
							    <input type="file" name="gimage2" value="<?php echo $fetch1['img2'] ?>" class="form-control-file" id="exampleFormControlFile2">
							 </div>
						</div>
					</div>

				  <div class="dropdown-divider"></div>



        <!-- ------------------------------------------  ######   ------------------------------------------------ -->


            
        <!-- ------------------------------------------ Ammenties   ------------------------------------------------ -->
         


				
            
        <!-- ------------------------------------------ Property Details  ------------------------------------------------ -->



				  <div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" value="" name="agree" id="invalidCheck2" >
				      <label class="form-check-label" for="invalidCheck2">
				        Agree to terms and conditions
				      </label>
				    </div>
				  </div>
				  <input class="btn btn-primary" name="Submit" type="submit">
				  <input class="btn btn-primary" name="Edit" type="submit" value="Edit">
		</form>
		<div class="clear"></div>
	</div>
</div>


<!-- --------------------------======================================================------------------------------ -->
     

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
		      <td><?php echo $fetch['year']?></td>
		      <!-- <td><a href=""><img src="Uploaded_Images/<?php echo $fetch['img1']?>" width="20px" height="20px" ></a></td> -->
		      <!-- <td><img src="Uploaded_Images/<?php echo $fetch['img2']?>" width="20px" height="20px" ></td> -->
		      <td>
		      	<div class="dropdown">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Dropdown button
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="Rent.php?nid=<?php echo $fetch['pid']?>">Edit</a>
				    <a class="dropdown-item" href="#">Another action</a>
				    
				  </div>
				</div>
		      </td>
		    </tr>
		
		    <?php  } ?>
		   
		  </tbody>

		</table>
	</div>
</div>
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


<!-- // $pid=" SELECT prop_id FROM ".properties."
        //      WHERE owner='$name',uid='$u_id',mobile_no='$mobile_no',email_id='$email',prop_status='$prop_status',prop_price='$price',prop_size='$area',location='$address',state='$state',city='$city',pincode='$pincode' ";
		

        //  mysql_query($pid);
       
        
		// $ins=" INSERT INTO ".properties." SET owner='$name',uid='$u_id',mobile_no='$mobile_no',email_id='$email',
		//                                   prop_status='$prop_status',prop_price='$price',prop_size='$area',location='$address',
		//                                   state='$state',city='$city',
		//                                   pincode='$pincode' ";

			// $ins = "INSERT INTO ".properties." (uid,owner,mobile_no,email_id,prop_status,prop_price,bed,bath,prop_size,location,state,city,pincode) 
		//    VALUES ('$u_id','$name','$mobile_no','$email','$prop_status','$price','$bed','$bath',$area','$address','$state','$city','$pincode')";

 -->