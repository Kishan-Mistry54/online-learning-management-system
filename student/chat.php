<?php 
    //error_reporting(0);
    include('connection.php');
    //session_start();
    include("session.php"); 
    
    $sender = $com_code;
    if(isset($_REQUEST['code']))
    {
        $mcode = $_REQUEST['code'];
        $_SESSION['receiver'] = $mcode;
        
        // Fixing the table update for sender and receiver
        $update = "update `$sender` set status = 'view' where status = 'send' AND sender = '$sender' AND receiver = '$mcode'";
        mysqli_query($conn, $update);
        
        // Correcting the typo here (change $mocde to $mcode)
        $update1 = "update `$mcode` set status = 'view' where status = 'send' AND sender = '$sender' AND receiver = '$mcode'";
        mysqli_query($conn, $update1);
        
        header("location:chat.php");
    }
    
    $receiver = $_SESSION['receiver'];
    if(isset($_REQUEST['btn_submit']))
    {
        $receiver = $_SESSION['receiver'];
        $msgtyp = $_REQUEST['msgtype'];
        $dt = date('d-m-Y');
        $tm = date('h:i A');
        $status = 'send';
        
        if($msgtyp == 'image' || $msgtyp == 'document')
        {
            $name=$_FILES['userfile']['name'];
            $tmp=$_FILES['userfile']['tmp_name'];
            $type=$_FILES['userfile']['type'];
            $size=$_FILES['userfile']['size'];
            $path="document/".$name;
            move_uploaded_file($tmp,$path);
        }
        else
        {
            $path = $_REQUEST['txt_msg'];
        }
        
        $insert = "insert into `$sender` values('','$sender','$receiver','$dt','$tm','$msgtyp','$path','$status')";
        mysqli_query($conn,$insert);
        
        $insert1 = "insert into `$receiver` values('','$sender','$receiver','$dt','$tm','$msgtyp','$path','$status')";
        mysqli_query($conn,$insert1);
        header("location:chat.php");
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

    <title>online Learning</title>

   <?php include('link.php');?>
   <!--<link rel="stylesheet" type="text/css" href="../css/main.css">-->
   <style>
   .messanger{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column}.messanger .messages{-ms-flex:1;flex:1;margin:10px 0;padding:0 10px;max-height:260px;overflow-y:auto;overflow-x:hidden}.messanger .messages .message{display:-ms-flexbox;display:flex;margin-bottom:15px;-ms-flex-align:start;align-items:flex-start}.messanger .messages .message.me{-ms-flex-direction:row-reverse;flex-direction:row-reverse}.messanger .messages .message.me img{margin-right:0;margin-left:15px}.messanger .messages .message.me .info{background-color:#673AB7;color:#fff}.messanger .messages .message.me .info:before{display:none}.messanger .messages .message.me .info:after{position:absolute;right:-13px;top:0;content:'';width:0;height:0;border-style:solid;border-width:0 16px 16px 0;border-color:transparent #673AB7 transparent transparent;-webkit-transform:rotate(270deg);-ms-transform:rotate(270deg);transform:rotate(270deg)}.messanger .messages .message img{border-radius:50%;margin-right:15px}.messanger .messages .message .info{margin:0;background-color:#ddd;padding:5px 10px;border-radius:3px;position:relative;-ms-flex-item-align:start;align-self:flex-start}.messanger .messages .message .info:before{position:absolute;left:-14px;top:0;content:'';width:0;height:0;border-style:solid;border-width:0 16px 16px 0;border-color:transparent #ddd transparent transparent}.messanger .sender{display:-ms-flexbox;display:flex}.messanger .sender input[type="text"]{-ms-flex:1;flex:1;border:1px solid #673AB7;outline:none;padding:5px 10px}.messanger .sender button{border-radius:0}
   </style>
   <script type="text/javascript">
		function showtype(str)
		{
		var xyz=null;
		//alert(str);
		
		if(window.XMLHttpRequest)
		{
			xyz = new XMLHttpRequest();
		}
		else if(window.ActiveXObject)
		{
			xyz= new ActiveXObject("Microsoft.XMLHTTP");
		}
		xyz.open('get',"ajax1.php?type="+str,true);
		xyz.send();
		
		xyz.onreadystatechange=function()
		{
			if(xyz.readyState==4)
			{
				document.getElementById("type").innerHTML=xyz.responseText;
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
                <h3>Chat</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Chat - <strong style="text-transform:uppercase;"><?php echo $_SESSION['receiver'] ?></strong></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      
                      <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#"><i class="fa fa-font pull-right"></i>Text</a>
                          </li>
                          <li><a href="#" ><i class="fa fa-file-image-o pull-right"></i>Image </a>
                          </li>
						  <li><a href="#" ><i class="fa fa-book pull-right"></i>Document </a>
                          </li>
                        </ul>
                      </li>-->
					  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  	<div class="col-md-12 col-sm-12 col-xs-12">
				  	
                      <!-- Content Start -->
					 
					  
		<div class="col-md-12">
            <div class="card">
              
              <div class="messanger">
                <div class="messages">
					<?php
					$ss = "select * from `$sender`";
					$rr = mysqli_query($conn,$ss);
					while($ww = mysqli_fetch_array($rr))
					{
						if($ww['sender'] == $sender && $ww['receiver'] == $receiver)
						{
							if($ww['message_type'] == 'image')
							{
							?>
						<div class="message me"><!--<img src="../CSS/images/avatar3.png">-->
						<p class="info"><strong><img src="<?php echo $ww['message'] ?>" height="100" width="100"></strong><br><span style="font-size:9px;text-align:right;"><?php echo $ww['date']." ".$ww['time'] ?></span></p>
						</div>
						<?php
							}
							else if($ww['message_type'] == 'document')
							{
							?>
						<div class="message me"><!--<img src="../CSS/images/avatar3.png">-->
						<p class="info"><strong><a href="<?php echo $ww['message'] ?>"><?php echo $ww['message_type'] ?></a></strong><br><span style="font-size:9px;text-align:right;"><?php echo $ww['date']." ".$ww['time'] ?></span></p>
						</div>
						<?php
							}
							else
							{
							?>
							<div class="message me"><!--<img src="../CSS/images/avatar3.png">-->
							<p class="info"><strong><?php echo $ww['message'] ?></strong><br><span style="font-size:9px;text-align:right;"><?php echo $ww['date']." ".$ww['time'] ?></span></p>
							</div>
							<?php
							}
						}
						
						if($ww['sender'] == $receiver &&$ww['receiver'] == $sender )
						{
							if($ww['message_type'] == 'image')
							{
							?>
						<div class="message"><!--<img src="../CSS/images/avatar3.png">-->
						<p class="info"><strong><img src="<?php echo $ww['message'] ?>" height="100" width="100"></strong><br><span style="font-size:9px;text-align:right;"><?php echo $ww['date']." ".$ww['time'] ?></span></p>
						</div>
						<?php
							}
							else if($ww['message_type'] == 'document')
							{
							?>
						<div class="message"><!--<img src="../CSS/images/avatar3.png">-->
						<p class="info"><strong><a href="<?php echo $ww['message'] ?>"><?php echo $ww['message_type'] ?></a></strong><br><span style="font-size:9px;text-align:right;"><?php echo $ww['date']." ".$ww['time'] ?></span></p>
						</div>
						<?php
							}
							else
							{
							?>
							<div class="message"><!--<img src="../CSS/images/avatar3.png">-->
							<p class="info"><strong><?php echo $ww['message'] ?></strong><br><span style="font-size:9px;text-align:right;"><?php echo $ww['date']." ".$ww['time'] ?></span></p>
							</div>
							<?php
							}
						}	
				  }
				  ?>
				  <div class="sender">
				<form method="post" enctype ="multipart/form-data">
					<!--<input type="radio" name="txt_msgtype" value="text" checked="checked" autofocus required>Text &nbsp;&nbsp;&nbsp;
					<input type="radio" name="txt_msgtype" value="image" autofocus required>Image &nbsp;&nbsp;&nbsp;
					<input type="radio" name="txt_msgtype" value="document" autofocus required>Document <br/>-->
                <div class="col-md-4 col-sm-4 col-xs-4">	
				 <select name="msgtype" class="form-control" onChange="showtype(this.value)">
						  	<option>-- Select Filed --</option>
							<option selected="selected" value="text"> Text </option>
							<option value="image"> Image </option>
							<option value="document"> Document </option>
				</select>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<div id="type">
					<input type="text" name="txt_msg" placeholder="Send Message" class="form-control" autofocus required>
					</div>
				</div>
				<div class="col-md-2 col-sm-2 col-xs-2">
                  <button type="submit" name="btn_submit" class="btn btn-submit"><i class="fa fa-lg fa-fw fa-paper-plane"></i>    </button> 
				</div>
				  
				  </form>
                </div>
                </div>
                
              </div>
            </div>
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