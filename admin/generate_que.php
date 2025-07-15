<?php 
	include('connection.php');
	//session_start();
	include('session.php');
?>
<?php	
	if(isset($_REQUEST['tid']))
	{
		$id = $_REQUEST['tid'];
	}

	if(isset($_REQUEST['btn_submit']))
	{
		$id = $_REQUEST['tid'];
		$que=$_REQUEST['que'];
		$ans1=$_REQUEST['ans1'];
		$ans2=$_REQUEST['ans2'];
		$ans3=$_REQUEST['ans3'];
		$ans4=$_REQUEST['ans4'];
		$rans=$_REQUEST['rans'];
		
		$insert="insert into mcq values('','$id','$que','$ans1','$ans2','$ans3','$ans4','$rans')";
		mysqli_query($conn,$insert);
		header("location:generate_que.php?tid=$id");
	}
	
	if(isset($_REQUEST['id']))
	{
		$mcq_id = $_REQUEST['id'];
		$del = "delete from mcq where mcq_id = '$mcq_id'";
		mysqli_query($conn,$del);
		header("location:generate_que.php?tid=$id");
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

    <title>Online Learning</title>

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
                    <h2>Generate Question</h2>
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
								
<input type="hidden" name="topic" value="<?php echo $tid ?>">

							  </div>
						  </div>
			 <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Question <span class="required">*</span>
								</label>
								 <input type="text" name="que" required="required" class="form-control" placeholder="Enter Question">
								</div>
								</div>
								
								<div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Answer 1 <span class="required">*</span>
								</label>
								 <input type="text" name="ans1" required="required" class="form-control" placeholder="Enter Answer 1">
								</div>
								</div>
								
								<div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Answer 2 <span class="required">*</span>
								</label>
								 <input type="text" name="ans2" required="required" class="form-control" placeholder="Enter Answer 2">
								</div>
								</div>
								
								<div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Answer 3 <span class="required">*</span>
								</label>
								 <input type="text" name="ans3" required="required" class="form-control" placeholder="Enter Answer 3">
								</div>
								</div>
								
								<div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Answer 4 <span class="required">*</span>
								</label>
								 <input type="text" name="ans4" required="required" class="form-control" placeholder="Enter Answer 4">
								</div>
								</div>
								
								<div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Right Answer <span class="required">*</span>
								</label>
								 
								<select name="rans" class="form-control" >
								<option value="Answer A">Answer A</option>
								<option value="Answer B">Answer B</option>
								<option value="Answer C">Answer C</option>
								<option value="Answer D">Answer D</option>
								</select>
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
								
								<th> Question</th>
								<th> Answer1 </th>
								<th> Answer2 </th>
								<th> Answer3 </th>
								<th> Answer4 </th>
								<th> Right Answer</th>
								<th> Action </th>
							</tr>
							</thead>
							<tbody>
							<?php
								$i= 1;
								$id = $_REQUEST['tid'];
								$q = "select * from mcq where topic_id ='$id'";
								$res = mysqli_query($conn,$q);
								while($r=mysqli_fetch_assoc($res))
								{
							?>
							<tr>
								<td><?php echo $r['mcq_id'] ?> </td>
								<td><?php echo $r['question'] ?> </td>
								<td><?php echo $r['ans1'] ?> </td>
								<td><?php echo $r['ans2'] ?> </td>
								<td><?php echo $r['ans3'] ?> </td>
								<td><?php echo $r['ans4'] ?> </td>
								<td><?php echo $r['right_ans'] ?> </td>
							
							<td><center><a href="que_edit.php?id=<?php echo $r['mcq_id'] ?>" class="btn  btn-info btn-xs" > <i class="fa fa-pencil"></i>Edit </a>
							
							<a href="generate_que.php?id=<?php echo $r['mcq_id'] ?>" class="btn  btn-danger btn-xs"> <i class="fa fa-trash-o"></i> Delete</a></center></td>
								
								
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
