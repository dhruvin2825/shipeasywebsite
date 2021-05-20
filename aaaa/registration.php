<!doctype html>
<html lang="en">
<?php 
require_once("../configuration/connection.php");
?>


<body>

	<!--================Header Menu Area =================-->
	<?php 
	include("header.php");	
	?>
		<?php
						$fn = $mn = $ln = $ct = $eml = $pass= $ad= $db= "";
  if ($_SERVER["REQUEST_METHOD"] == "POST")  
  {
	  if(isset($_POST["register"]))
	  {
	  
	  if(empty($_POST["fname"]))
	{
	
		$fn= "fname Is Mandatory";
	}
	else
		{
		$fname = $_POST["fname"];
	}
	if(empty($_POST["mname"]))
	{
		$mn = "mnameIs Mandatory";
	}
	else
	{
		$fname2 = $_POST["mname"];
	}
	if(empty($_POST["lname"]))
	{
		$mn = "mname Is Mandatory";
	}
	else
	{
		$mname2= $_POST["lname"];
	}
	if(empty($_POST["dob"]))
	{
		$db = "dob no Is Mandatory";
	}
	else
	{
		$fname3 = $_POST["dob"];
	}
	if(empty($_POST["address"]))
	{
		$ad = "address Is Mandatory";
	}
	else
	{
		$fname4 = $_POST["address"];
	}
	if(empty($_POST["contact_no"]))
	{
		$ct = "contact no Is Mandatory";
	}
	else
	{
		$fname5= $_POST["contact_no"];
	}
	if(empty($_POST["email"]))
	{
		$eml= "Email Is Mandatory";
	}
	else
	{
		$fname6 = $_POST["email"];
	}
	if(empty($_POST["password"]))
	{
		$pass = "Password Is Mandatory";
	}
	else
	{
		$fname7= $_POST["password"];
	}
						
						
								if($_SERVER["REQUEST_METHOD"]== "POST")
								{
									if(isset($_POST["fname"]) && isset($_POST["mname"]) && isset($_POST["lname"]) && isset($_POST["dob"]) && isset($_POST["address"]) && isset($_POST["contact"]) && isset($_POST["email"]) && isset($_POST["pass"])) 
									{
										$fname=$_POST["fname"];
										$fname1=$_POST["mname"];
										$fname2=$_POST["lname"];
										$fname3=$_POST["dob"];
										$fname4=$_POST["address"];
										$fname5=$_POST["contact"];
										$fname6=$_POST["email"];
										$fname7=$_POST["pass"];
									
									     
										 if($fname!='' && $fname1!='' && $fname2!='' && $fname3!='' && $fname4!='' && $fname5!='' && $fname6!='' && $fname7!='')
										 {
											 $sql ="insert into user(Fname,Mname,Lname,Date_of_birth,Address,Contact_no,
												Email,Password)
									         values('".$fname."','".$fname1."','".$fname2."','".$fname3."','".$fname4."','".$fname5."','".$fname6."','".$fname7."')";
											 $result=mysqli_query($conn,$sql);
										   if($result)
										   {
											   echo "<meta http-equiv='refresh' content='3'; url=index.php>";
										   }
										 }
									}
									else
									{
										echo "value not set";
									}
										}
  }
  }
  
										?>
					
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	
	<!--================End Home Banner Area =================-->

	<!--================Login Box Area =================-->
	<section class="login_box_area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="login_box_img">
						<img class="img-fluid" src="img/loginjpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="#" href="#"></a>
						</div>
					</div>
				</div>
				
    <!--================Login Box Area =================-->
				
				
				<div class="col-lg-6">
					<div class="login_form_inner reg_form">
						<h3>Create an Account</h3>
						<form class="row login_form" action="#" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="fname" placeholder="First Name">
								<span class="error"><?php echo $fn ;?></span>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="mname" placeholder="Middle Name">
							<span class="error"><?php echo $mn ;?></span>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="lname" placeholder="Last Name">
							<span class="error"><?php echo $ln ;?></span>
							</div>
							<div class="col-md-12 form-group">
								<input type="date" class="form-control" id="dob" name="dob" placeholder="DOB">
							<span class="error"><?php echo $db ;?></span>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="address" name="address" placeholder="Address">
							<span class="error"><?php echo $ad ;?></span>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="number" name="contact" placeholder="Contact_No">
							<span class="error"><?php echo $ct ;?></span>
							</div>
							<div class="col-md-12 form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
							<span class="error"><?php echo $eml ;?></span>
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="pass" placeholder="Password">
							<span class="error"><?php echo $pass ;?></span>
							</div>
							<div class="col-md-12 form-group">
							
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" id="register" class="btn submit_btn">Register</button>
							</div>
						</form>
						
										
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

	<!--================ start footer Area  =================-->
	
	<!--================ End footer Area  =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>