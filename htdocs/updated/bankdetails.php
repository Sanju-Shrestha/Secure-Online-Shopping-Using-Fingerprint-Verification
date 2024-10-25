<?php  
session_start();
require_once('connect.php');
if (isset($_POST) & !empty($_POST)){
		$bankName = mysqli_real_escape_string($connection, $_POST['bankName']);
		$cardNo = mysqli_real_escape_string($connection, $_POST['cardNo']);
		$CVV = mysqli_real_escape_string($connection, $_POST['CVV']);
		$expireDate = mysqli_real_escape_string($connection, $_POST['expireDate']);
		
		
		$sql = "SELECT * FROM `bankDetails` WHERE bankName = '$bankName' AND cardNo = '$cardNo' AND CVV = '$CVV' AND expireDate = '$expireDate'";
		$result = mysqli_query($connection, $sql); 
		$count = mysqli_num_rows($result);
		if($count == 1)
		{
			$_SESSION['cardNo'] = $cardNo;
		}
		else
		{
			$fmsg = "Invalid Card number/CVV/Expire Date";
		}
}
if(isset($_SESSION['cardNo'])){
	header('Location: confirm.php');
	
    
   $smsg = "User $cardNo already logged in";
}
 

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="/msrit.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>User Login in PHP & MySQL</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="styles.css" >

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
                <a class="navbar-brand" href="index.html"><strong>DIGI </strong> Shop</a>
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
                            <li><a href="#"><strong>Mail: </strong>info@onlineshop.com</a></li>
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
    
        <div class="container">
		<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"><?php echo $smsg; ?> </div>
		<?php } ?>
		<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"><?php echo $fmsg; ?> </div>
	    <?php } ?> 
	<form class="form-signin" method="POST">
       <h2 class="form-signin-heading">Your Bank Details</h2>
       <div class="input-group">
	     <span class="input-group-addon" id="basic-addon1">NameofBank</span>
	     <input type="text" name="bankName" class="form-control" placeholder="bankName" required>
	   </div>
	   <div class="input-group">
	     <span class="input-group-addon" id="basic-addon1">Cardno:</span>
	     <input type="text" name="cardNo" class="form-control" placeholder="cardNo" required>
	   </div>
	   <div class="input-group">
	     <span class="input-group-addon" id="basic-addon1">CVV</span>
	     <input type="text" name="CVV" class="form-control" placeholder="CVV" required>
	   </div>
       <div class="input-group">
	     <span class="input-group-addon" id="basic-addon1">ExpireDate</span>
	     <input type="text" name="expireDate" class="form-control" placeholder="MM/YYYY" required>
	   </div>
       <button class="btn btn-lg btn-primary btn-block" type="submit">Done</button>  
    </form>
	</div>
                <br>
                    <br>
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



    <div class="col-md-12 end-box ">
        &copy; 2017 | &nbsp; All Rights Reserved | &nbsp; www.multimodalsecurity.com | &nbsp; 24x7 support | &nbsp; Email us: info@multimodalsecurity.com
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
