<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" href="styles/style.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
    <div id="top">   <!-- Top Begin -->

        <div class="container"> <!-- Container Begin -->

            <div class="row"> <!-- Row Begin -->

                <div class="col-md-6 offer"> <!-- col-md-6 offer Begin -->

                    <a href="#" class="btn btn-success btn-sm">Welcome</a>
                    <a href="#">4 Item in your Cart | Total Price: $300</a>

                </div> <!-- col-md-6 offer Begin -->

                <div class="col-md-6"> <!-- col-md-6 Begin -->

                    <ul class="menu"> <!-- menu Begin -->

                        <li>
                            <a href="customer_register.php">Register</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Go To Cart</a>
                        </li>
                        <li>
                            <a href="checkout.php">Login</a>
                        </li>

                    </ul> <!-- menu Begin -->

                </div> <!-- col-md-6 End -->

            </div> <!-- Row End -->

        </div> <!-- Container End -->

    </div>  <!-- Top End --> 

    <div id="navbar" class="navbar navbar-default"> <!-- navbar navbar-default Begin-->

        <div class="container"> <!-- Container Begin-->
            
            <div class="navbar-header"> <!-- navbar-header Begin-->

                <a href="index.php" class="navbar-brand home"> <!-- navbar-brand home Begin-->
                    <img style="width:50px; height=49px;" src="images/shopping-online.jpg" alt="Store logo" class="hidden-xs rounded-circle">
                    <img style="width:53px; height=33px;" src="images/logo.jpg" alt="Store logo" class="visible-xs rounded-circle ">
                </a> <!-- navbar-brand home Top-->

                <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation"> <!-- navbar-toggle Begin-->
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button> <!-- navbar-toggle End-->
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search"> <!-- navbar-toggle Begin-->
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button> <!-- navbar-toggle End-->

            </div> <!-- navbar-header End-->
            <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse Begin-->

                <div class="padding-nav"> <!-- Padding-nav Begin-->

                    <ul class="nav navbar-nav left"> <!-- nav navbar-nav left Begin-->
                  
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>
                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>
                        <li>
                            <a href="cart.php">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    
                    </ul> <!-- nav navbar-nav left End-->
                </div> 
                <a href="cart.php" class="btn navbar-btn btn-primary right" style="float:right;"> <!-- btn navbar-btn btn-primary right Begin-->

                    <i class="fa fa-shopping-cart"></i>

                    <span>4 Items in Your Cart</span>

                </a> <!-- btn navbar-btn btn-primary right End-->

                <div class="navbar-collapse collapse right" style="float:right;"> <!-- navbar-collapse collapse right Begin-->

                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">

                        <span class="sr-only">Toggle Search</span>

                        <i class="fa fa-search"></i>

                    </button>

                </div>  <!-- navbar-collapse collapse right End-->

                <div class="collapse clearfix" id="search">  <!-- collapse clearfix Begin-->

                    <form method="get" action="results.php" class="navbar-form"> <!-- navbar-form Begin-->

                        <div class="input-group">  <!-- input-group" Begin-->
                            <span class="input-group-btn">
                            <input type="text" class="form-control" name="user_query" placeholder="Search" required>

                            <button type="submit" name="search" value="search" class="btn btn-primary"> <!-- btn btn-primary Begin-->

                                <i class="fa fa-search"></i>
                            
                            </button> <!-- btn btn-primary Begin-->
                            </span>

                        </div>  <!-- input-group End-->

                    </form>  <!-- navbar-form End-->
                
                </div>  <!-- collapse clearfix End-->

            </div>   <!-- navbar-collapse collapse End-->

        </div> <!-- Container End -->

    </div> <!-- navbar navbar-default End-->

    <div id="content">
        <div class="container">
            <div class="col-md-12">

                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Register
                    </li>

                </ul>

            </div>

            <div class="col-md-3">
                
                <?php include("includes/sidebar.php"); ?>
            </div>
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h2>Register a new account</h2>
                        </center>
                        <form action="customer_register.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="c_name" required>
                            </div>
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" class="form-control" name="c_email" required>
                            </div>
                            <div class="form-group">
                                <label>Your Country</label>
                                <input type="text" class="form-control" name="c_country" required>
                            </div>
                            <div class="form-group">
                                <label>Your City</label>
                                <input type="text" class="form-control" name="c_city" required>
                            </div>
                            <div class="form-group">
                                <label>Your Contact</label>
                                <input type="text" class="form-control" name="c_contact" required>
                            </div>
                            <div class="form-group">
                                <label>Your Address</label>
                                <input type="text" class="form-control" name="c_address" required>
                            </div>
                            <div class="form-group">
                                <label>Your Profile Picture</label>
                                <input type="file" class="form-control" name="c_image" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="register" class="btn btn-primary">
                                    <i class="fa fa-user-md"></i> Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php 
        
        include("includes/footer.php");

    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>