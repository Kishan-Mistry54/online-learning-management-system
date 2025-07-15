<?php 
	include('connection.php');
	include("session.php"); 
	
	if(isset($_REQUEST['btn_submit']))
	{
		$name=$_REQUEST['txt_name'];
		$insert="insert into query(question,stu_id) values('$name','$stu_stid')";
		mysqli_query($conn,$insert);
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
                <!--<h3>Home</h3>-->
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Query</h2>
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
					  	<form method="post">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div align="center">
									<br><br><br><br><br>
        <!-- Content Row -->
        <div class="row">
		
            <div class="col-md-9">
                
            
                      <form method="post">

                    <div class="control-group form-group">
					
                       	 		<div class="controls">
								<label>Student Query:</label>
                            		<input type="text" name="txt_name" class="form-control" required> 
                            			<p ></p>
                        		</div>
							<input type="submit" name="btn_submit" class="btn btn-primary" value="Add">
							
                    </div>
					
					</form>
					
					<div class="jumbotron">
                    <div class="table-responsive">
					<h2 align="center">View detail</h2>          
  						<table class="table" id="example">
							<thead>
    				
      							<tr>
        						<th style="background-color:#337ab7; color:#FFFFFF; border-radius:5px 0px 0px 5px;">No</th>
		                       <!-- <th style="background-color:#337ab7; color:#FFFFFF;">ID</th> -->
		                        <th style="background-color:#337ab7; color:#FFFFFF;">Question</th>
								<th style="background-color:#337ab7; color:#FFFFFF;">Comments</th>
		
		                      
								</tr>
    						</thead>
							<tbody>
							<?php
		$i=1;
		
		$res="select * from query  ";
		//$res="select * from query";
		
		$rel=mysqli_query($conn,$res);
		while($row=mysqli_fetch_array($rel))
		{
		?>
			<tr class="tr-data">
				<td><?php echo $i++ ?></td>
				<!--<td><?php // echo $row['qid'] ?></td> -->
				<td><?php echo $row['question'] ?></td>
				
				
				<td>
					<a href="comment.php?edit=<?php echo $row['qid'] ?>"><b class="btn btn-danger">Comments</b></a>
				</td>
			<?php /*?>	<td>
					<a href="Departmentname.php?delete=<?php echo $row['id'] ?>" onClick="return confirm('Are you sure want to delete')">Delete</a>
				</td><?php */?>
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
       
        <!-- Footer -->
        <footer>
           <?php
		   include("footer.php");
		   ?>
        </footer>

    </div>
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
