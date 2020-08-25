<?php include("Connection.php") ?>
<?php

 	error_reporting(0);

 	$name=$_POST['Owner_name'];
 	$mobile_no=$_POST['mobile_no'];
 	$email=$_POST['mail'];
 	$username=$_POST['username'];

 	$address=$_POST['Address'];
 	$city=$_POST['City'];
 	$state=$_POST['State'];
 	$pincode=$_POST['Pincode'];
 	$price=$_POST['price'];

 	$area=$_POST['Area'];
 	$bed=$_POST['Bedrooms'];
 	$bath=$_POST['Bathrooms'];
 	$year=$_POST['year_built'];

 	$wifi=$_POST['year_built'];


 	if(isset($_POST['Submit']))
 	{
 		

 		if( $name!="" and $mobile_no!="" and $price!="" and $area!="" )
 		{
 			$ins = " INSERT INTO ".pro1." ( uid,owner,mobile_no,email_id,prop_price,bed,bath,prop_size,location,state,city,pincode,prop_status,year,img1,img2) 
			   VALUES ('$u_id','$name','$mobile_no','$email','$price','$bed','$bath','$area','$address','$state','$city','$pincode','$prop_status','$year',' $name1',' $name2')";


 			// $ins=" INSERT INTO ".pro1." SET owner='$name',mobile_no='$mobile_no',email_id='$email',
 			//                                   prop_price='$price',prop_size='$area',location='$address',state='$state',city='$city' ";

 			mysql_query($ins);

 			// echo $ins;

 		}
 	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Fill Details</title>
	<link href="style.css" rel="stylesheet">
	<?php include("header_link.php") ?>
	 
</head>
<body class="body">
	<div class="container">
		<div class="main">
			<header>
	 					Fill Details
	 		</header>

			<?php include('header.php') ?>

		<form  class="fill_details" method="post">

			            <!-- ------------------------------------------ Owner Details  ------------------------------------------ -->
				  <div class="form-row">
				  	<div class="row col-md-12 topic">
				  	       Owner Details
				  	</div>
				    <div class="col-md-3 mb-3">
				      <label for="validationDefault01">Owner name</label>
				      <input type="text" class="form-control" id="validationDefault01" placeholder="" name="Owner_name" >
				    </div>

				    <div class="col-md-3 mb-3">
				      <label for="validationDefault01">Mobile no</label>
				      <input type="text" class="form-control" id="validationDefault01" placeholder="" name="mobile_no"  >
				    </div>

				    <div class="col-md-3 mb-3">
				      <label for="validationDefault01">Email Id</label>
				      <input type="Email" class="form-control" id="validationDefault01" placeholder="mail@gmail.com" name="mail" >
				    </div>
				    
				    <div class="col-md-3 mb-3">
				      <label for="validationDefaultUsername">Username</label>
				      <div class="input-group">
				        <div class="input-group-prepend">
				          <span class="input-group-text" id="inputGroupPrepend2">@</span>
				        </div>
				        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" name="username" aria-describedby="inputGroupPrepend2" >
				      </div>
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
				      <input type="text" class="form-control" id="validationDefault03" name="Address" placeholder="Address" >
				    </div>
				    <div class="col-md-3 mb-3">
				      <label for="validationDefault03">City</label>
				      <input type="text" class="form-control" id="validationDefault03" name="City" placeholder="City" >
				    </div>
				    <div class="col-md-3 mb-3">
				      <label for="validationDefault04">State</label>
				      <input type="text" class="form-control" id="validationDefault04" name="State" placeholder="State" >
				    </div>
				    <div class="col-md-3 mb-3">
				      <label for="validationDefault05">Pincode</label>
				      <input type="text" class="form-control" id="validationDefault05" name="Pincode" placeholder="Pincode" >
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
								  <select class="custom-select" id="prop_type" >
								    <option selected>Sell/Rent</option>
								    <option value="1">Sell</option>
								    <option value="2">Rent</option>
								  </select>
								</div>

							    <div class="input-group col-md-3 mb-3"  >
								  <select class="custom-select" id="prop_type" >
								    <option selected>Offer</option>
								    <option value="1">Hot Offer</option>
								    <option value="2">Sale</option>
								    <option value="3">None</option>
								  </select> 
								</div>		
		 
							<div class="col-md-3 mb-3">
						      <label for="validationDefault05">Price</label>
						      <input type="number" step="any" class="form-control" id="validationDefault05" name="price" placeholder="Price" >
						    </div>			    
								

								 <div class="input-group col-md-3 mb-3"  >
								  <select class="custom-select" id="prop_type" >
								    <option selected>Rent Period</option>
								    <option value="1">Monthly</option>
								    <option value="2">Yearly</option>
								    <option value="3">3 Months</option>
								    <option value="3">6 Months</option>
								    <option value="3">9 Months</option>
								  </select> 
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
					      <input type="number" step="any" class="form-control" id="validationDefault05" name="Area" placeholder="Area" >
					    </div>	

					    <div class="col-md-3 mb-3">
					      <label for="validationDefault05">Bedrooms</label>
					      <input type="number" step="any" class="form-control" id="validationDefault05" name="Bedrooms" placeholder="" >
					    </div>			
 
						<div class="col-md-3 mb-3">
					      <label for="validationDefault05">Bathrooms</label>
					      <input type="number" step="any" class="form-control" id="validationDefault05" name="Bathrooms" placeholder="" >
					    </div>

				    <div class="col-md-3 mb-3">
				      <label for="validationDefault05">Year Built</label>
				      <input type="number" step="any" class="form-control" id="validationDefault05" name="year_built" placeholder="eg: 2010" >
				    </div>			    
	

						</div>
					</div>

				  <div class="dropdown-divider"></div>
            
        <!-- ------------------------------------------ Ammenties   ------------------------------------------------ -->
         


				 <div class="form-row ">
					  	<div class="row col-md-12 topic">
					  	       Ammenties
					  	</div>

					  	<div class="row col-md-12">
					  		
					  		<div class="col-md-1 mb-3">
							    <input type="checkbox" name="check[]" class="" value=""/>Wifi<br>
							</div>	
							<div class="col-md-1 mb-3">
							    <input type="checkbox" name="check[]" class="" value=""/>Gym<br>
							</div>
							<div class="col-md-2 mb-3">
							    <input type="checkbox" name="check[]" class="" value=""/>Theater<br>
							</div>

							<div class="col-md-2 mb-3">
							    <input type="checkbox" name="check[]" class="" value=""/>Laundry<br>
							</div>
							<div class="col-md-2 mb-3">
							    <input type="checkbox" name="check[]" class="" value=""/>Microwave<br>
							</div>

							<div class="col-md-1 mb-3">
							    <input type="checkbox" name="check[]" class="" value=""/>Pool<br>
							</div>

							<div class="col-md-1 mb-3">
							    <input type="checkbox" name="check[]" class="" value=""/>TV<br>
							</div>
						

						</div>
					</div>

				  <div class="dropdown-divider"></div>
            
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
		</form>
  

			    <div class="clear"></div>
		</div>
</div>
</body>
 <?php include("footer_link.php") ?>

</html>