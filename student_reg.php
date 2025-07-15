<?php 
	include('connection.php'); 
?>
<?php
	if(isset($_REQUEST['sub']))
	{
		$emp = $_REQUEST['txt_emp'];
		$fname = $_REQUEST['txt_fn'];
		$mname = $_REQUEST['txt_mn'];
		$lname = $_REQUEST['txt_ln'];
		$birth = $_REQUEST['txt_db'];
		//$country = $_REQUEST['count_nm'];
		$state = $_REQUEST['state_nm'];
		$city = $_REQUEST['city_nm'];
		$add = $_REQUEST['txt_address'];
		$contact = $_REQUEST['cont'];
		$gender = $_REQUEST['rdo_1'];
		$email = $_REQUEST['txt_em'];
		//$uname=$_REQUEST['txt_uname'];
		$pass = $_REQUEST['txt_pass'];
		$depe = $_REQUEST['sel_state'];
		$seme = $_REQUEST['sel_city'];
		$subj = $_REQUEST['sel_city1'];
		$d=date("Y-m-d");
		$y=$_REQUEST['city_nm1'];
		$course = $_REQUEST['cname'];
		
		$insert = "insert into student_reg(student_code,fname,mname,lname,date_of_birth,state,city,address,contact_no,gender,email,password,status,reg_date,course_id) values('$emp','$fname','$mname','$lname','$birth','$state','$city','$add','$contact','$gender','$email','$pass','active','$d','$course')";
		 
		 mysqli_query($conn,$insert);
		 $table = "CREATE TABLE  `$emp` (
								`chat_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
								`sender` VARCHAR( 100 ) NOT NULL ,
								`receiver` VARCHAR( 100 ) NOT NULL ,
								`date` VARCHAR( 50 ) NOT NULL ,
								`time` VARCHAR( 50 ) NOT NULL ,
								`message_type` VARCHAR( 100 ) NOT NULL ,
								`message` VARCHAR( 500 ) NOT NULL ,
								`status` VARCHAR( 100 ) NOT NULL
								) ENGINE = INNODB;";
		mysqli_query($conn,$table);
	

		 header("location:login.php");	
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

    <title>Online learning</title>

   <?php include('link.php');?>
   <script type="text/javascript">
		function showstate(str)
		{
		var abc=null;
		//alert(str);
		
		if(window.XMLHttpRequest)
		{
			abc = new XMLHttpRequest();
		}
		else if(window.ActiveXObject)
		{
			abc= new ActiveXObject("Microsoft.XMLHTTP");
		}
		abc.open('get',"ajax.php?state="+str,true);
		abc.send();
		
		
		
		abc.onreadystatechange=function()
		{
			if(abc.readyState==4)
			{
				document.getElementById("city").innerHTML=abc.responseText;
			}
		}
		
	
	}
	function showstate1(str1)
		{
		var abc=null;
		//alert(str);
		
		if(window.XMLHttpRequest)
		{
			abc = new XMLHttpRequest();
		}
		else if(window.ActiveXObject)
		{
			abc= new ActiveXObject("Microsoft.XMLHTTP");
		}
		abc.open('get',"ajax1.php?state="+str1,true);
		abc.send();
		
		
		
		abc.onreadystatechange=function()
		{
			if(abc.readyState==4)
			{
				document.getElementById("city1").innerHTML=abc.responseText;
			}
		}
		
	
	}
</script>
<script>
function validate(field, query) 
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
	xmlhttp.open("GET", "ajaxx.php?field=" + field + "&query=" + query, false);
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
                <h3>Student</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Student Registration</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>-->
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  	<div class="col-md-12 col-sm-12 col-xs-12">
				  	
                      <!-- Content Start -->
					  <div>
					  	<center>
					  		<form method="post">
<table align="center" cellpadding="5" cellspacing="5" width="60%" height="500">
		
		<tr>
		<?php
					 	$i = 1;
						$sel = "select * from student_reg";
						$res = mysqli_query($conn,$sel);
						while($row = mysqli_fetch_array($res))
						{
							$i = $row['stid'] + 1;
						}
					 ?>
			<td>
			
			<input type="text" name="txt_emp" class="form-control" maxlength="150" data-msg-required="Please enter your name." value="Student_<?php echo $i ?>" placeholder="Employee Code" readonly="true" style="width:290px">
			
			</td>
			<td>
				<input type="text" name="txt_fn" class="form-control" maxlength="150" data-msg-required="Please enter your name." value="" placeholder="Enter First Name" pattern="[A-Za-z ]{3,}" title="Only Alphabets" style="width:290px" required="required">
			</td>
		</tr>
		<tr>
			<td>
				<input type="text" name="txt_mn" class="form-control" maxlength="150" data-msg-required="Please enter your name." value="" placeholder="Enter Middle Name" pattern="[A-Za-z ]{3,}" title="Only Alphabets" style="width:290px" required="required">
			</td>
			<td>
				<input type="text" name="txt_ln" class="form-control" maxlength="150" data-msg-required="Please enter your name." value="" placeholder="Enter Last Name" pattern="[A-Za-z ]{3,}" title="Only Alphabets" style="width:290px" required="required">
			</td>
		</tr>
		<tr>
			<td>
				<input type="date" name="txt_db" class="form-control" maxlength="150" data-msg-required="Please enter your name." value="" placeholder="Date of Birth" style="width:290px" required="required">
			</td>
			<td>
				<select class="form-control" maxlength="100" name="rdo_1" style="width:290px">
			 
									<option>----Gender----</option>
									<option>Male</option>
									<option>Female</option>
									
									
			  </select>
			</td>
		</tr>
		<tr>
			<td>
				 <select class="form-control" maxlength="100" name="state_nm" style="width:290px" onChange="validate('city',this.value)">
			 
									<?php
$q1=mysqli_query($conn,"SELECT * FROM state");
echo"<option>.....Select State Name.....</option>";
while($R1=mysqli_fetch_array($q1))
{
$name=$R1['state_name'];
$ID=$R1['state_id'];
echo"<option value='$ID' >$name</option>";
}
?>
			  </select>
			</td>
			<td>
			
			<div class="col-sm-10" id="city">
									
			
			</td>
		</tr>
		<tr>
			<td>
				<textarea name="txt_address" class="form-control" maxlength="150" data-msg-required="Please enter your name." value="" placeholder="Address" style="width:290px" required="required"></textarea>
			</td>
			<td>
				<input type="number" name="cont" class="form-control" maxlength="150" data-msg-required="Please enter your name." value="" placeholder="contact no" style="width:290px" pattern="[0-9]{10,10}" title="Only Numeric" required="required">
			</td>
		</tr>
		<tr>
			
			<td>
				<input type="email" name="txt_em" class="form-control" maxlength="150" data-msg-required="Please enter your name." value="" placeholder="Enter Email" style="width:300px" pattern="[_a-z0-9-+]+(\.[_a-z0-9-+]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})" required="required">
			</td>
		
			<td>
				<input type="password" name="txt_pass" class="form-control" maxlength="150" data-msg-required="Please enter your name." value="" placeholder="password" style="width:300px" pattern="[a-zA-Z0-9]{8,12}" required="required">
			</td>
			</tr>
			<tr>
			<td>
				 <select class="form-control" maxlength="100" name="cname" style="width:290px" >
			 
									<?php
$q2=mysqli_query($conn,"SELECT * FROM course");
echo"<option>.....Select Course Name.....</option>";
while($R2=mysqli_fetch_array($q2))
{
$name=$R2['cname'];
$ID=$R2['cid'];
echo"<option value='$ID' >$name</option>";
}
?>
			  </select>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<!-- -->
			</td>
		</tr>
								
								<tr><td>
							<input type="submit" name="sub" class="btn btn-lg btn-success btn-block" maxlength="100"  value="Register" >
							
                   </td></tr></table>
					</form>
						</center>
					</div>
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
