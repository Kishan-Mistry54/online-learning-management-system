<?php 
	include('connection.php'); 
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
        <?php include('head.php');?>
        <!-- /top navigation -->
		<!-- page content -->
  		<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            
              <div class="title_left">
                <h3>CONTACT</h3>
				<hr>
				
				
				<div class="col-md-12 col-sm-12 col-xs-12">
							  <?php /*?>
							  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.156188559834!2d73.08740471438922!3d21.146181685934856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be067880d282293%3A0x6d317ca1a11806a4!2sVidya+Bharti+School+%26+College!5e0!3m2!1sen!2sin!4v1491384779539" width="100%" height="350" frameborder="0" style="border-radius:10px;" allowfullscreen></iframe>
						  </div>
						  
				<div class="x_content">
				  	<div class="col-md-6 col-sm-6 col-xs-6">
				  	<br><br>
					<h3>CONTACT FORM</h3>
					<hr>
                      <!-- Content Start -->
					  <form method="post">
						  <div class="col-md-6">
							  <div class="form-group">
								<label class="control-label">Name<span class="required"> *</span>
								</label>
								  <input type="text"  required="required" class="form-control">
							  </div>
						  </div>
						  
						  <div class="col-md-6">
							  <div class="form-group">
								<label class="control-label">Email<span class="required"> *</span>
								</label>
								  <input type="text"  required="required" class="form-control">
							  </div>
						  </div>
						  
						  <div class="col-md-6">
							  <div class="form-group">
								<label class="control-label">Subject<span class="required"> *</span>
								</label>
								  <input type="text"  required="required" class="form-control">
							  </div>
						  </div>
						  
						  
						  <div class="col-md-6">
							  <div class="form-group">
								<label class="control-label">Address<span class="required"> *</span>
								</label>
				     			<input type="text"  required="required" class="form-control">
							  	</div>
						  </div>
						  </div>
						  
						  <div class="col-md-8 col-sm-8 col-xs-8">
							  <div class="form-group" align="right">
								  <!--<button type="reset" class="btn btn-primary">Cancel</button>-->
								  <button type="submit" name="btn_login" class="btn btn-success">Submit</button>
							  </div>
						  </div>
						  
					  </form>
					  </div><?php */?>
                  </div>
				</div>
            <div class="clearfix"></div>
          </div>
        </div>
		<?php include('footer.php');?>
        <!-- /footer content -->
      </div>
    </div>
	<?php include('Js.php');?>
  </body>
</html>
