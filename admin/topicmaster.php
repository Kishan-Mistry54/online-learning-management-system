<?php 
	include('connection.php');
	//session_start();
	include('session.php');
?>
<?php	
	if(isset($_REQUEST['btn_submit']))
	{
		$dname=$_REQUEST['select_product'];
		$semester=$_REQUEST['sel_city'];
		$subj=$_REQUEST['subject'];
		$subj1=$_REQUEST['subject1'];
		
		//....
		$name=$_FILES['userfile']['name'];
		$tmp=$_FILES['userfile']['tmp_name'];
		$type=$_FILES['userfile']['type'];
		$size=$_FILES['userfile']['size'];
		$path="Upload_image/".$name;
		move_uploaded_file($tmp,$path);	
		
		//....
		
		$insert="insert into topic(chptid,topicname,topic_desc,status,documentupload) values('$semester','$subj','$subj1','Active','$path')";
		mysqli_query($conn,$insert);
		header("location:topicmasterview.php");
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
   <script type="text/javascript">
		function showstate(str)
		{
		var abc=null;
		//alert(str);
		
		if(window.XMLHttpRequest)
		{
			abc = new XMLHttpRequest();
		}
		else if(window.ActiveXObject)
		{
			abc= new ActiveXObject("Microsoft.XMLHTTP");
		}
		abc.open('get',"ajax.php?state="+str,true);
		abc.send();
		
		
		
		abc.onreadystatechange=function()
		{
			if(abc.readyState==4)
			{
				document.getElementById("city").innerHTML=abc.responseText;
			}
		}
		
	
	}
</script>
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
                    <h2>Topic Name</h2>
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
					  <form method="post" enctype="multipart/form-data">
						  <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Course Name <span class="required">*</span>
								</label>
<select name="select_product"  class="form-control" weight="100%" onChange="showstate(this.value)">
				<?php
$q1=mysqli_query($conn,"SELECT * FROM course");
echo"<option>.....Select course Name.....</option>";
while($R1=mysqli_fetch_array($q1))
{
$name=$R1['cname'];
$ID=$R1['cid'];
echo"<option value='$ID' >$name</option>";
}
?>
				
			</select>							  </div>
						  </div>
			 <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Chepter Name <span class="required">*</span>
								</label>
								  <div id="city"></div>
								</div>
								</div>
								 <div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Topic Name <span class="required">*</span>
								</label>
								 <input type="text" name="subject" id="first-name" title="Only Alphabets.. min 2 char.." required="required" class="form-control" placeholder="Topic Name">
								</div>
								</div>
								<!--<div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Topic Description <span class="required">*</span>
								</label>
								 <input type="text" name="subject1" id="first-name" title="Only Alphabets.. min 2 char.." required="required" class="form-control" placeholder="Topic Description">
								</div>
								</div>-->
								<div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Topic Description <span class="required">*</span>
								</label>
								 <textarea class="textarea" name="subject1" id="first-name" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
								</div>
								</div>
								
								<div class="col-md-12">
							  <div class="form-group">
								<label class="control-label">Topic Document Upload <span class="required">*</span>
								</label>
								<input type="file" name="userfile" class="form-control" maxlength="150" id="filetoupload" style="width:300px" required="required">
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
