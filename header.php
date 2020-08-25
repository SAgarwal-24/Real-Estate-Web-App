<?php  
include("Connection.php")
  ?>

<?php 
    error_reporting(0);
    session_start();
 
 ?>

 <section id="title" >
            <div class="container ">
                <div class="container-fluid">
                	<div class="row">
                		<div class="col-md-6">
                			<img src="images/Agarwal_logo.jpg">
                		</div>

                                <div class="col-md-4">  </div>
                                <div class="col-md-2 login"> 
                                        <div class="row">
                                            <?php if($_SESSION['user_name']=="") {?>
                                            <div class="col-md-6" id="Sign"><a href="login.php">Login</a></div>
                                            <?php   } else { ?>
                                            <div class="col-md-6" id="Sign"><a href="logout.php">Logout</a></div>
                                             <?php } ?>

                                             <?php if($_SESSION['user_name']=="") {?>
                                           <div class="col-md-6" id="Sign"><a href="Registration.php">Sign Up</a></div> 
                                       <?php   }  ?>
                                        </div>      
                              </div>

                		
                	</div>
                </div>
           </div>
        </section>