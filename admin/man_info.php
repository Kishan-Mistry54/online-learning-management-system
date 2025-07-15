<?php 
	include('../connection.php');
	session_start();
	include('session.php'); 
	$i=$_REQUEST['iid'];
	$q="select * from manager_reg where manager_id=".$_REQUEST['iid'];
	$r = mysqli_query($conn,$q);
	$r1 = mysqli_fetch_assoc($r);
	if(isset($_REQUEST['btn_update']))
	{
		$cco = $_REQUEST['txt_mcc'];
		$co = $_REQUEST['txt_mcod'];
		$fnm = $_REQUEST['txt_mfn'];
		$mnm = $_REQUEST['txt_mmn'];
		$lnm = $_REQUEST['txt_mln'];
		$add = $_REQUEST['txt_add'];
		$dis = $_REQUEST['txt_dis'];
		$pin = $_REQUEST['txt_pin'];
		$gen = $_REQUEST['g'];
		$cn = $_REQUEST['txt_con'];
		$db = $_REQUEST['txt_dob'];
		$dj = $_REQUEST['txt_doj'];
		$em = $_REQUEST['txt_em'];
		$pwd = $_REQUEST['txt_pwd'];
		
		$update = "update manager_reg set manager_company_code = '$cco', manager_code = '$co', manager_first_name = '$fnm', manager_middle_name = '$mnm', manager_last_name = '$mnm', manager_address = '$add', manager_district = '$dis', manager_pincode = '$pin', manager_gender = '$gen', manager_contact = '$cn', manager_dob = '$db', manager_doj = '$dj', manager_email = 'em', manager_password = '$pwd' where manager_id = ".$i;
		mysqli_query($conn,$update);
					
		header("location:manager_disp.php");
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
                <h3>MANAGER</h3>
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
								<label class="control-label">  Company Code <span class="required">*</span>
								</label>
								  <input type="text" name="txt_mcc" id="first-name" value = "<?php echo $r1['manager_company_code'] ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  Code <span class="required">*</span>
								</label>
								  <input type="text" name="txt_mcod" id="first-name" value = "<?php echo $r1['manager_code'] ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  First Name <span class="required">*</span>
								</label>
								  <input type="text" name="txt_mfn" pattern="[A-Za-z]{2,}" title="Only Alphabets.. min 2 char.." id="first-name" value = "<?php echo $r1['manager_first_name'] ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  Middle Name <span class="required">*</span>
								</label>
								  <input type="text" name="txt_mmn" pattern="[A-Za-z]{2,}" title="Only Alphabets.. min 2 char.." id="first-name" value = "<?php echo $r1['manager_middle_name'] ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  Last Name <span class="required">*</span>
								</label>
								  <input type="text" name="txt_mln" pattern="[A-Za-z]{2,}" title="Only Alphabets.. min 2 char.." id="first-name" value = "<?php echo $r1['manager_last_name'] ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  Address <span class="required">*</span>
								</label>
								  <textarea name="txt_add" class="form-control" readonly="true"><?php echo $r1['manager_address'] ?></textarea>
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  District <span class="required">*</span>
								</label>
								  <input type="text" name="txt_dis" id="first-name" value = "<?php echo $r1['manager_district'] ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  Pincode <span class="required">*</span>
								</label>
								  <input type="text" name="txt_pin" id="first-name" value = "<?php echo $r1['manager_pincode'] ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  Gender <span class="required">*</span>
								</label>
								<div class="form-control" >
								  <?php 
							  		if($r1['manager_gender'] == 'Male')
									{
							  		
							  ?>
								
								  <input type="radio" name="g" class="flat" id="first-name" value = "Male" required="required"  checked="checked" readonly="true"> Male
								  <input type="radio" name="g" class="flat" id="first-name" value = "Female" required="required" readonly="true"> Female
								  <?php
								  		}
										else
										{
								  ?>
								  <input type="radio" name="g" id="first-name" value = "Male" required="required" readonly="true"> Male
								  <input type="radio" name="g" class="flat" class="flat" id="first-name" value = "Female" required="required" checked="checked" readonly="true"> Female
									<?php
										}
									?>

							  </div>
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  Contact <span class="required">*</span>
								</label>
								  <input type="text" name="txt_con" id="first-name" value = "<?php echo $r1['manager_contact'] ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  Date Of Birth <span class="required">*</span>
								</label>
								  <input type="text" name="txt_dob" data-inputmask="'mask': '99/99/9999'" id="first-name" value = "<?php echo $r1['manager_dob'] ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  Date Of Join <span class="required">*</span>
								</label>
								  <input type="text" name="txt_doj" data-inputmask="'mask': '99/99/9999'" id="first-name" value = "<?php echo $r1['manager_doj'] ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  E-Mail <span class="required">*</span>
								</label>
								  <input type="email" name="txt_em" id="first-name" value = "<?php echo $r1['manager_email'] ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">  Password <span class="required">*</span>
								</label>
								  <input type="text" name="txt_pwd" id="first-name" value = "<?php echo $r1['manager_password'] ?>" required="required" class="form-control" readonly="true">
							  </div>
						  </div>
						  
						  <!--<div class="col-md-12 col-sm-12 col-xs-12">
						  	<div class="col-md-4 col-sm-4 col-xs-4">
							  <div class="form-group" align="right">
								  <button type="back" name="back" class="btn btn-primary">Back</button>
								  
							  </div>
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
	<!-- jquery.inputmask -->
    <script>
      $(document).ready(function() {
        $(":input").inputmask();
      });
    </script>
    <!-- /jquery.inputmask -->
  </body>
</html>
