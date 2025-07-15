<?php 
	include('../connection.php');
	session_start();
	include('session.php'); 
	if(isset($_REQUEST['del']))
	{
		$id = $_REQUEST['del'];
		$code = $_REQUEST['co'];
		$name = $_REQUEST['nm'];
		$address = $_REQUEST['add'];
		$diarector = $_REQUEST['dnm'];
		$contact = $_REQUEST['con'];
		$email = $_REQUEST['em'];
		$website = $_REQUEST['web'];
		$password = $_REQUEST['pwd'];


	}
	
	if(isset($_REQUEST['btn_update']))
	{
		$co = $_REQUEST['txt_code'];
		$nm = $_REQUEST['txt_fnm'];
		$add = $_REQUEST['txt_add'];
		$dnm = $_REQUEST['txt_dnm'];
		$con = $_REQUEST['txt_con'];
		$em = $_REQUEST['txt_em'];
		$web = $_REQUEST['txt_web'];
		$pwd = $_REQUEST['txt_pwd'];
		
		
		$update = "update company_reg set company_code = '$co', company_name = '$nm', company_address = '$add',company_direator_name = '$dnm', company_contact = '$con', company_email = '$em', company_website = '$web', company_password = '$pwd' where company_id = '$id'";
		$r = mysqli_query($conn,$update);
		
		header("location:company_disp.php");
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

    <title>Employee To Manager</title>

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
                <h3>COMPANY</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Information</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  	<div class="col-md-12 col-sm-12 col-xs-12">
				  	
                      <!-- Content Start -->
					  <div class="col-md-3 col-sm-3 col-xs-3"></div>
					  <div class="col-md-6 col-sm-6 col-xs-6">
					  <form method="post">
					  	<div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Company Code <span class="required">*</span>
								</label>
								  <input type="text" name="txt_code" id="first-name" value="<?php echo $code ?>"  required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Company Name <span class="required">*</span>
								</label>
								  <input type="text" name="txt_fnm" id="first-name" value="<?php echo $name; ?>"  required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Address <span class="required">*</span>
								</label>
								  <textarea name="txt_add" class="form-control" readonly="true"> <?php echo $address; ?></textarea>
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Company Direator Name <span class="required">*</span>
								</label>
								  <input type="text" name="txt_dnm" id="first-name" value="<?php echo $diarector; ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Contact <span class="required">*</span>
								</label>
								  <input type="text" name="txt_con" id="first-name" value="<?php echo $contact; ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">E-Mail <span class="required">*</span>
								</label>
								  <input type="text" name="txt_em" id="first-name" value="<?php echo $email; ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Website <span class="required">*</span>
								</label>
								  <input type="text" name="txt_web" id="first-name" value="<?php echo $website; ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Password <span class="required">*</span>
								</label>
								  <input type="text" name="txt_pwd" id="first-name" value="<?php echo $password; ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						
						 <!-- <div class="col-md-12 col-sm-12 col-xs-12">
							  <div class="form-group" align="right">
								  <button type="submit" name="reset" class="btn btn-primary">Cancel</button>
								  <button type="submit" name="btn_update" class="btn btn-success">Submit</button>
							  </div>
						  </div>-->
					  </form>
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
