<?php
	include("connection.php");
	//$pageheading = 'Forgot Password';
	
	
$msg = "";
$text = "";


if(isset($_REQUEST['btn_submit']))
{
$email = $_SESSION['forgot'];
	$otp = $_SESSION['otp'];
	$text = $_REQUEST['txtotp'];
	
	if($text == $otp)
	{
		header("location:forgot_newpwd.php");	
	}
	else
	{
		$msg = "OTP Code Not Matched..!";
	}
}
if(isset($_REQUEST['btn_resend']))
{
	$email = $_SESSION['email'];
	$otp = rand(100000,999999);
	echo $_SESSION['otp'] = $otp;
	
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
                    <h2>OTP Code</h2>
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
		<label for="exampleInputEmail1">OTP Code</label>
		<input id="email1" class="form-control mb-30" type="number" name="txtotp" placeholder="Enter OTP Code" value="<?php echo $text ?>" onKeyUp="validation1('otp',this.value)" pattern="[0-9]" required>
		</div>
		<div id="otp" style="color:#FF0000;font-size:12px;margin-top:-15px;" class="col-lg-6"></div>
</div>
		<div class="form-group">
		<div class="col-lg-6">
		<p style="color:#FF3300;"><?php echo $msg ?></p>
		</div>
		</div>
		
		<div id="otp">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="review_submit" type="submit" name="btn_submit" onClick="return checkForm()" class="btn dento-btn" value="Submit">Submit</button>
		
		
		</div><br><br>
						
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
