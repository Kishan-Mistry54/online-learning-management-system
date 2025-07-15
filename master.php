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
                <h3>Heading</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Heading</h2>
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
					  <form method="post">
						  <div class="col-md-4">
							  <div class="form-group">
								<label class="control-label">First Name <span class="required">*</span>
								</label>
								  <input type="text" name="txt_fnm," id="first-name" required="required" class="form-control">
							  </div>
						  </div>
						  
						  
						  
						  <div class="col-md-12 col-sm-12 col-xs-12">
							  <div class="form-group">
								  <button type="submit" class="btn btn-primary">Cancel</button>
								  <button type="submit" class="btn btn-success">Submit</button>
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
