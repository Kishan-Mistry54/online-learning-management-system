<?php 
	include('connection.php');
	include("session.php");
	
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
                <!--<h3>Home</h3>-->
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!--<h2>Home</h2>-->
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
					  	<table id="datatable-buttons" class="table table-striped table-bordered">
						  	<thead>
						  	<tr>
								
								<!--<th> No </th>
								<th> Course Name </th>
								<th> Chepter Name </th>
								<th> Topic Name </th>-->
								<th> Description </th>
								<th> Document Upload </th>
								
							</tr>
							</thead>
							
							<tbody>
							<?php
							$a=$_REQUEST['sid'];
							$q = "select * from chepter join course on course.cid=chepter.coid join topic on topic.chptid=chepter.chpid where topic.chptid='$a'" ;
	                        $res = mysqli_query($conn,$q);
							
								while($r=mysqli_fetch_assoc($res))
								{
							?>
							
							<tr>
							    <?php /*?><td><?php echo $r['chpid'] ?> </td>
								<td><b><?php echo $r['cname'] ?></b> </td>
								<td><b style="color:black"><?php echo $r['cheptername'] ?></b> </td>
								<td><b style="color:red"><?php echo $r['topicname'] ?></b> </td><?php */?><b style="color:red;"><?php echo $r['topicname'] ?></b><br><br> 
								<td><b style="color:#0000CC"><?php echo $r['topic_desc'] ?></b> </td>
								<td><a href="../admin/<?php echo $r['documentupload'] ?>" target="_blank" class="btn btn-warning">Download Document</a>
								<br>
								<a href="view_mcq.php?cid=<?php echo $r['chptid'] ?>" class="btn btn-success">View MCQ</a>
								<a href="view_ans.php?cid=<?php echo $r['chptid'] ?>" class="btn btn-danger">View Answer</a>
								
								</td>
								
								
							</tr>
							
							<?php
								}
							?>
							</tbody>
						 </table>  
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
