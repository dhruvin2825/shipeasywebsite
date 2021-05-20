<!DOCTYPE html>
<html lang="en">
<?php 
	include("header.php");	
	?>
<?php 
require_once('./db_connect.php');
?>


<body>

	<!--================Header Menu Area =================-->

	<?php
						
						
								if($_SERVER["REQUEST_METHOD"]== "POST")
								{							
									
									if(isset($_POST["firstname"]) && isset($_POST["lastname"])     && isset($_POST["email"]) && isset($_POST["password"])) 
									{
										$fname=$_POST["firstname"];
										
										$fname2=$_POST["lastname"];
										
										$fname6=$_POST["email"];
										$password=$_POST["password"];
									
									     
										 if($fname!='' && $fname2!='' && $fname6!='' && $password!='')
										 {
										//echo "value not null";
	                                                $password=md5($password);
											 $sql ="insert into users(firstname,lastname,email,password)
									         values('".$fname."','".$fname2."','".$fname6."','".$password."')";
											 $result=mysqli_query($conn,$sql);
										   if($result)
										   {
											   echo "<meta http-equiv='refresh' content='3; url=login.php'>";
										   }
										 }
									}
									else
									{
										echo "value not set";
									}
										}
										
										?>

<head> <title>Create an Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css1/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css1/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="firstname" id="name" placeholder="First Name" required="" />
                            </div>
							 <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="lastname" id="name" placeholder="Last Name" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required=""/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" required=""/>
                            </div>
                            
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->
        
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
	<script>
	$('#manage-staff').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_user',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved',"success");
					setTimeout(function(){
              location.href = 'login.php?page=staff_list'
					},2000)
				}else if(resp == 2){
          $('#msg').html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Email already exist.</div>')
          end_load()
        }
			}
		})
	})		
  function displayImgCover(input,_this) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#cover').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
  }
 
</script>
</body>
<?php include 'footer.php' ?>

</body>
</html>