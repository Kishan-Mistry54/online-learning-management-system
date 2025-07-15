<?php 
	$err= "";
	include('../connection.php');
	session_start();
	
	if(isset($_REQUEST['btnsubmit']))
	{
		$q = "select * from admin where password like '".$_REQUEST['txt_old']."' and username like '".$_SESSION['admin']."'";
		if(mysqli_num_rows(mysqli_query($conn,$q))>0)
		{
		if($_REQUEST['txt_new'] == $_REQUEST['txt_pwd'])
			{
				$q1 = "update admin set password = '".$_REQUEST['txt_new']."' where username like '".$_SESSION['admin']."'";
				mysqli_query($conn,$q1);
				$err="Pasword Changed!!!";
			}
			else
			{
				$err="New And Confirm Password Are Not Same";
			}
		}
		else
		{
			$err="old Password is Invalid";
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

    <title>College Management</title>

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
        <?php // include('head.php');?>
        <!-- /top navigation -->
		<!-- page content -->
  		<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Change Password</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-3 col-sm-3 col-xs-3"></div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Password</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <!--<ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>-->
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  	<div class="col-md-12 col-sm-12 col-xs-12">
				  	
                      <!-- Content Start -->
					  <?php echo $err; ?>
					  <form method="post">
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Old Password <span class="required">*</span>
								</label>
								  <input type="password" name="txt_old" id="first-name" required="required" class="form-control">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">New Password <span class="required">*</span>
								</label>
								  <input type="password" name="txt_new" id="first-name" required="required" class="form-control">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Confirm Password <span class="required">*</span>
								</label>
								  <input type="password" name="txt_pwd" id="first-name" required="required" class="form-control">
							  </div>
						  </div>
						  
						  <div class="col-md-12 col-sm-12 col-xs-12">
							  <div class="form-group" align="center">
								  
								  <button type="submit" name="btnsubmit" value="chnage password" class="btn btn-success">Submit</button>
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
