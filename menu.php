 <?php  
include("Connection.php")
 ?>

 <!-- <section id="menu">
    <div class="container">
                    <div class="container-fluid">
                            <div class="row"> -->
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <a class="navbar-brand" href="#"></a>
                                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>

                         
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">

                                <ul class="navbar-nav mr-auto">

                                  <li class="nav-item active menu_item">
                                    <a class="" href="index.php">Home<span class="sr-only">(current)</span></a>
                                  </li>

                                  <li class="nav-item menu_item">
                                    <a class="" href="#">About Us</a>
                                  </li>
                                
                                  <li class="nav-item menu_item">
                                    <a class=" " href="Buy.php">Buy</a>
                                  </li>

                                  <li class="nav-item menu_item">
                                    <?php if($_SESSION['uid']!='') {?> 
                                        <a class="" href="Rent.php">Rent/Sell</a>
                                     <?php } else {?>
                                        <a class="" href="">Rent/Sell</a>
                                      <?php }?>
                                  </li>
                                </ul>
                                
                              </div>

                        </nav>
            <!--             </div>
                    </div>
                </div>
</section> -->
<!--  <section id="menu">
                <div class="container">
                    <div class="container-fluid">
                            <div class="row">
                                    <div class="col-md-2 menu_item"><a href="index.php" >Home</a></div> 
                                    <div class="col-md-2 menu_item">About Us</div>
                                    <div class="col-md-2 menu_item"><a href="Buy.php">Buy</a></div>
                                    <?php if($_SESSION['uid']!='') {?>
                                    <div class="col-md-2 menu_item"><a href="Rent.php">Rent/Sell</a></div>
                                    <?php } else {?>
                                    <div class="col-md-2 menu_item">Rent/Sell</div>
                                   <?php }?>
                            </div>
                    </div>
                </div>
        </section> -->