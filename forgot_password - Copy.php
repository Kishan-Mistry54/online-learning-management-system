<?php
	include("connection.php");
	$pageheading = 'Forgot Password';
	
	if(isset($_REQUEST['btn_submit']))
	{
		$email = $_REQUEST['txtemail'];
		
		//$email = $_SESSION['email'];
	$_SESSION['forgot'] = $email;
	unset($_SESSION['email']);
	//$cno = $_SESSION['email'];
	$otp = rand(100000,999999);
	$_SESSION['otp'] = $otp;
	require_once('class.phpmailer.php');

    require_once('class.smtp.php');

    $mail = new PHPMailer(true);

    $mail->IsSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPAuth = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port = 465;                   // set the SMTP port for the GMAIL server
    $mail->Username = "mistryravindra522@gmail.com";  // GMAIL username : $mail->Username = "*******@gmail.cc.cc";
    $mail->Password = "Unistar@190589";  

    $mail->AddAddress($email,$otp);  // Add a recipient

    $mail->IsHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Forget Password For Online Learning System';
    $mail->Body    = "Your OTP : $otp";
    $mail->AltBody = '';

if(!$mail->Send())
 {
	print_r($mail);
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
		header("location:forgot_otp.php");	
	}
	
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Learning </title>

   <?php include('link.php');?>
    <script type="text/javascript">
  function checkForm() 
  {
  	//alert("submit");
	// Fetching values from all input fields and storing them in variables.
	var email = document.getElementById("email1").value;
	
	
	/*var password = document.getElementById("password1").value;
	var email = document.getElementById("email1").value;
	var website = document.getElementById("website1").value;*/
	//Check input Fields Should not be blanks.
	alert("Fill All Fields");
	if (email == '') 
	{
		alert("Fill All Fields");
		return false;//
	} 
	else 
	{
		//Notifying error fields
		var email1 = document.getElementById("email");
		
		if (email1.innerHTML == 'Required'|| email1.innerHTML == 'Invalid Email') 
		{
			alert("Fill Valid Information");
			return false;
		} 
		else 
		{
			//Submit Form When All values are valid.
			document.getElementById("myForm").submit();
		}
	}
}
// AJAX code to check input field values when onblur event triggerd.
function validation1(field, query) 
{
	var xmlhttp;
	if (window.XMLHttpRequest) 
	{ 
		// for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} 
	else 
	{ 
		// for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() 
	{
		if (xmlhttp.readyState != 4 && xmlhttp.status == 200) 
		{
			document.getElementById(field).innerHTML = "Validating..";
		} 
		else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
		{
			document.getElementById(field).innerHTML = xmlhttp.responseText;
		} 
		else 
		{
			document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
		}
	}
	xmlhttp.open("GET", "validation1.php?field=" + field + "&query=" + query, false);
	xmlhttp.send();
}
  </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
			<!-- menu profile quick info -->
      		<!-- /menu profile quick info -->
			 <!-- sidebar menu -->
			<?php include('menu.php');?>
            <!-- /sidebar menu -->
			</div>
        </div>
		 <!-- top navigation -->
        <?php include('head.php');?>
        <!-- /top navigation -->
		<!-- page content -->
  		<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Forgot Password</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3"></div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Forgot Passwod</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  	<div class="col-md-12 col-sm-12 col-xs-12">
				  	
                      <!-- Content Start -->
					 <form method="post" id="myForm" name="myForm" class="form-horizontal">

						<div class="form-group">
		<div class="col-lg-6">
		<label for="exampleInputEmail1">Email</label>
		<input id="email1" class="form-control mb-30" type="text" name="txtemail" placeholder="Enter Email Id" onChange="validation1('email',this.value)" required>
		</div>
		<!--<div id="email" style="color:#FF0000;font-size:12px;margin-top:-15px;" class="col-lg-6"></div>  onKeyUp="validation('email',this.value)"-->
</div>
		<div id="email">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="btn_submit" class="btn dento-btn" value="Submit">Submit</button><br><br>
		</div>
						<br><br>
						 
					</form>
					  <!-- Content END -->
					
					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- /page content -->
		
        <!-- footer content -->
       
		<?php include('footer.php');?>
        <!-- /footer content -->
      </div>
    </div>
	<?php include('Js.php');?>
  </body>
</html>
