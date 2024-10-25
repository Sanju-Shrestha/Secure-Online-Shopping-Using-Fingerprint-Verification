<?php
session_start();
?>
   <!DOCTYPE html>


<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="/msrit.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Confirm your purchase</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>



<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong>BuyO</strong> Shop</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
				<li><a href="#">
<?php

echo " " . $_SESSION["username"] . " ";
?>

    </a></li>
                    <li><a href="#">Track Orders</a></li>
    <a ><span>
    </span></a>
    
    
                    <li><a href="logout.php">Logout</a></li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">24x7 Support <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><strong>Call: </strong>+09-456-567-890</a></li>
                            <li><a href="#"><strong>Mail: </strong>buyoshop@gmail.com</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><strong>Address: </strong>
                                <div>
                                    560054, Mathikere,<br />
                                    Bangalore, India
                                </div>
                            </a></li>
                        </ul>
                    </li>
                </ul>

 <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" placeholder="Enter Keyword Here ..." class="form-control">
                    </div>
                    &nbsp; 
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    
        <br>
		<br>
		<br>
		<br>
		<br>
		<br>
<br>
<br>
<br>
<br>
<br>
<p align="center">
               <a href="http://192.168.43.180/Verify.aspx" onclick="javascript:event.target.port=64579" class="btn btn-success btn-lg">Confirm Purchase</a>
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp
                <a href="welcome.php" class="btn btn-danger btn-lg">Cancel Purchase</a> <br>

				<br>
&nbsp;   &nbsp;(By confirming the purchase you will be directed to the bank portal)
				</p>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


    <div class="col-md-12 end-box ">
        &copy; 2017 | &nbsp; All Rights Reserved | &nbsp;| &nbsp; 24x7 support | &nbsp; Email us: buyoshop@gmail.com.com
    </div>
    <!-- /.col -->
    <!--Footer end -->
    <!--Core JavaScript file  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="assets/ItemSlider/js/jquery.catslider.js"></script>
    <script>
        &#8377(function () {

            &#8377('#mi-slider').catslider();

        });
        </script>
</body>
</html>


