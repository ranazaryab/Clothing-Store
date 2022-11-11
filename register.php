<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>REGISTRATION</title>
	 <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	 <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo" style="width: 133px;height: 42px;">
                    <a href="./index.html"><img src="img/main.png" alt=""></a>
                </div>
                <div class="header-right">
                    <img src="img/icons/search.png" alt="" class="search-trigger">
                    <img src="img/icons/man.png" alt="">
                    <a href="#"><img src="img/icons/bag.png" alt=""><span>0</span></a>
                </div>
                <div class="user-access">
                    <a href="register.php">Register</a>
                    <a href="register.php" class="in">Sign in</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a class="active" href="./index.html">Home</a></li>
                        <li><a href="./categories.html">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="product.php">Product Page</a></li>
                          <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="check-out.html">Check out</a></li>
                            </ul>
                        </li>
                        <li><a href="about_us.html">About</a></li>
                        
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

 <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="img/icons/delivery.png" alt="">
                        <p>Free shipping on orders over $30 in USA</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="img/icons/voucher.png" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                    <img src="img/icons/sales.png" alt="">
                    <p>30% off on dresses. Use code: 30OFF</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!--form-->	
<!-- <center><form method="POST"  style="padding-top: 30px;">
	<table border="2">
		<tr>
			<td colspan="2"><h4 style="background: black;color: white;font-family: sans-serif;font-style: italic; ">CUSTOMER REGISTRATION FORM</h4></td>
		</tr>
		<tr style="text-align: center;">
			<center><td>NAME</td></center>
			<td><input type="text" name="c_name" placeholder="Enter Name"></td>
		</tr>
		<tr style="text-align: center;">
			<center><td>EMAIL</td></center>
			<td><input type="email" name="c_email" placeholder="Enter Email"></td>
		</tr>
		<tr style="text-align: center;">
			<center><td>PHONE</td></center>
			<td><input type="tel" name="c_tel" placeholder="Enter Number"></td>
		</tr>
		<tr >
			<td colspan=2px align="center"><input type="submit" name="register" value="REGISTER"></td>
		</tr>
	</table>
</form></center> -->
<center>
    <div class="col-lg-8" style="padding-top: 50px;">
                    <form method="POST" class="register-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="fname" placeholder="First Name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="lname" placeholder="Last Name" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="email" name="email" placeholder="E-mail" required>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" name="register">REGISTER</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
</center>
<br><br><br><br>
<footer class="footer-section spad" style="padding-top: 30px;">
<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
				</div>
			</div>

        <div class="container text-center pt-5">
        <p>Copyright &copy; 2020. All rights reserved </p>
            </div>
		</div>
		</footer>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','voilet');

if(isset($_POST['register']))
{
$name=$_POST['fname'];
$rname=$_POST['lname'];
$mail=$_POST['email'];
$query="INSERT INTO registration(f_name,l_name,email) VALUES ('$name','$rname','$mail')";
$query_result=mysqli_query($con,$query);
 if($query_result){
echo "<script>alert('THANKS FOR REGISTRATION');</script>";
}
else
{
    echo "not inserted" . mysqli_error($con);
}
}
?>