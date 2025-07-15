<?php 
	include('connection.php'); 
	session_start();
	//include('session.php');
	
	//$user = $_SESSION['admin'];
	$sel = "select * from admin";
	$r1 = mysqli_query($conn,$sel);
	$row = mysqli_fetch_assoc($r1);
	$code = $row['username'];
	//if($_SESSION['admin'])
	//{
		//header("location:admin/home.php");
	//}

	
	if(isset($_REQUEST['btn_login']))
	{
		$unm = $_REQUEST['txt_unm'];
		$pwd = $_REQUEST['txt_pwd'];
		
		$sel = "select * from admin where username = '$unm' AND password = '$pwd'";
		$res = mysqli_query($conn,$sel);
		
		
		
		$sel2 = "select * from student_reg where email = '$unm' AND password = '$pwd'";
		$res2 = mysqli_query($conn,$sel2);
		
		
		if(mysqli_num_rows($res))
		{
			$_SESSION['admin'] = $unm;
			header("location:admin/home.php");			
		}
		
		
		elseif(mysqli_num_rows($res2))
		{
			$row2 = mysqli_fetch_array($res2);
			if($row2['status'] == 'active')
			{
				$_SESSION['student'] = $unm;
				header("location:student/home.php");
			}
			else
			{
				echo "<script>alert('Accout is Blocked')</script>";	
			}
		}
		
		
		
		else
		{
			echo "<script>alert('Invalid username or password...')</script>";
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
                <h3>Login</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3"></div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Login</h2>
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
					  <form method="post">
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Username<span class="required"> *</span>
								</label>
								  <input type="text" name="txt_unm" id="first-name" required="required" class="form-control">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Password<span class="required"> *</span>
								</label>
								  <input type="password" name="txt_pwd" id="first-name" required="required" class="form-control">
							  </div>
						  </div>
						  
						  
						  
						  <div class="col-md-12 col-sm-12 col-xs-12">
							  <div class="form-group" align="right">
								  <!--<button type="reset" class="btn btn-primary">Cancel</button>-->
								  <button type="submit" name="btn_login" class="btn btn-success">Submit</button>
							  </div>
						  </div>
						  
						  
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
