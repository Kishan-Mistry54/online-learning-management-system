<?php 
	include('connection.php');
	//session_start();
	include('session.php');
?>
<?php	
	if(isset($_REQUEST['btn_submit']))
	{
		$name=$_REQUEST['txt_name'];
		$date = date('Y-m-d');
		$insert="insert into notes(note,n_date) values('$name','$date')";
		mysqli_query($conn,$insert);
		header("location:notes1.php");
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

    <title>Learning System</title>

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
                <h3>Master</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Notes</h2>
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
								<label class="control-label">Enter Notes<span class="required">*</span>
								</label>
								 <!-- <input type="text" name="txt_name"   required="required" class="form-control" placeholder="Notes">-->
								   <textarea class="textarea" name="txt_name" id="first-name" placeholder="Enter Your Notes" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
							  </div>
						  </div>
			
						  <div class="col-md-12 col-sm-12 col-xs-12">
						  	<!--<div class="col-md-4 col-sm-4 col-xs-4">-->
							  <div class="form-group" align="right">
								  <button type="submit" name="btn_submit" class="btn btn-success">Submit</button>
								  <button type="reset" name="reset" class="btn btn-primary">Cancel</button>
								  
							  </div>
							<!--</div>-->
						  </div>
					  </form>
					  </div>
					  <!-- Content END -->
					<table id="datatable-buttons" class="table table-striped table-bordered">
						  	<thead>
						  	<tr>
								<th> No </th>
								
								<th> Notes</th>
								
								<th> Update </th>
								
							</tr>
							</thead>
							<tbody>
							<?php
								$i= 1;
								$q = "select * from notes";
								$res = mysqli_query($conn,$q);
								while($r=mysqli_fetch_assoc($res))
								{
							?>
							<tr>
								<td><?php echo $r['notes_id'] ?> </td>
								<td><?php echo $r['note'] ?> </td>
								
							
								<td><center><a href="notes_edit.php?nid=<?php echo $r['notes_id'] ?>" class="btn  btn-info btn-xs" > <i class="fa fa-pencil"></i>Edit </a></center></td>
								
								
							</tr>
							<?php
								}
							?>
							</tbody>
						 </table>
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
