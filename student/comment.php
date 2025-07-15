<?php 
	include('connection.php');
	include("session.php"); 
	
	if(isset($_REQUEST['btn_submit']))
	{
		$name=$_REQUEST['txt_name'];
			$d=$_REQUEST['edit'];
			$dat=date('d-m-Y');
			$tm = date('h:i A');
			
		$insert="insert into comment_reply(queid,userid,comments,date,time) values('$d','$stu_stid','$name','$dat','$tm')";
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
<script>
body{margin-top:20px;}

.comment-wrapper .panel-body {
    max-height:650px;
    overflow:auto;
}

.comment-wrapper .media-list .media img {
    width:64px;
    height:64px;
    border:2px solid #e5e7e8;
}

.comment-wrapper .media-list .media {
    border-bottom:1px dashed #efefef;
    margin-bottom:25px;
}
</script>
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
                    <h2>Home</h2>
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
					  	<hr>
        <div class="row">
		<div class="col-md-3">
		
		</div>
		<form  method="post">
            <div class="col-md-12" align="right">
			<br>
			
			  <div class="row bootstrap snippets">
			  
    <div class="col-md-6 col-md-offset-2 col-sm-12">
	
        <div class="comment-wrapper">
		
            <div class="panel panel-info">
			
			<?php
		$d=$_REQUEST['edit'];
		$res="select * from query where qid='$d'";
		$rel=mysqli_query($conn,$res);
		while($row=mysqli_fetch_array($rel))
		{
		?>
			<tr class="tr-data">
			
			
				<div class="panel-heading">
              <b style="color:red">Question : </b>  <?php echo $row['question'] ?>
                </div>
				
				
			<?php /*?>	<td>
					<a href="Departmentname.php?delete=<?php echo $row['id'] ?>" onClick="return confirm('Are you sure want to delete')">Delete</a>
				</td><?php */?>
			</tr>
		<?php
		}
	?>
                
                <div class="panel-body">
                    <textarea class="form-control" name="txt_name" placeholder="write a comment..." rows="3"></textarea>
                    <br>
                   <input type="submit" name="btn_submit" class="btn btn-primary" value="Comments">
                    <div class="clearfix"></div>
					 </form>   
                    <hr>
			
	<?php
		$i=1;
		$d=$_REQUEST['edit'];
		$res12="select * from comment_reply join student_reg on student_reg.stid=comment_reply.userid where queid='$d'";
		$rel12=mysqli_query($conn,$res12);
		while($row12=mysqli_fetch_array($rel12))
		{
		?>
		 <ul class="media-list">
                        <li class="media">
                            <!--<a href="#" class="pull-left">
                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                            </a> -->
                            <div class="media-body">
                               <!-- <span class="text-muted pull-right">
                                    <small class="text-muted">jhjh</small>
                                </span> -->
                                <strong class="text-success"><td><b  style="color:red"><?php echo $row12['fname'] ?> &nbsp; <?php echo $row12['lname'] ?></b></td></strong>
                                <p>
                                   <td><b><?php echo $row12['comments'] ?></b></td><br>
								   <small class="text-muted"><td><?php echo $row12['date'] ?></td></small> <b>|</b>
								   
                                    <small class="text-muted"><td><?php echo $row12['time'] ?></td></small>
                                </p>
                            </div>
                        </li>
					</ul>
			
			
		<?php
		}
	?>
                   <!-- <ul class="media-list">
                        <li class="media">
                            <!--<a href="#" class="pull-left">
                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                            </a> -->
                           <!-- <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted">30 min ago</small>
                                </span>
                                <strong class="text-success">@MartinoMont</strong>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                </p>
                            </div>
                        </li> --> 
                       <!-- <li class="media">
                            <a href="#" class="pull-left">
                                <img src="https://bootdey.com/img/Content/user_2.jpg" alt="" class="img-circle">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted">30 min ago</small>
                                </span>
                                <strong class="text-success">@LaurenceCorreil</strong>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor <a href="#">#ipsumdolor </a>adipiscing elit.
                                </p>
                            </div>
                        </li>
                        <li class="media">
                            <a href="#" class="pull-left">
                                <img src="https://bootdey.com/img/Content/user_3.jpg" alt="" class="img-circle">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted">30 min ago</small>
                                </span>
                                <strong class="text-success">@JohnNida</strong>
                                <p>
                                    Lorem ipsum dolor <a href="#">#sitamet</a> sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </li> -->
                    <!--</ul> -->
                </div>
            </div>
        </div>

    </div>
</div>      
              
               </div>
            </div>
					
            </div>
        </div>
        <!-- /.row -->
        <hr>

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
