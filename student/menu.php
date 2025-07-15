<div class="navbar nav_title" style="border: 0;">
              <a href="home.php" class="site_title"><span>Online Learning</span></a>
            </div>
			<div class="clearfix"></div>
 <div class="profile clearfix">
              <!--<div class="profile_pic">
                <img src="../CSS/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                
              </div>-->
			
            </div>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a href="home.php"><i class="fa fa-home" ></i> Home </span></a>
				  <li><a href="notes1.php"><i class="fa fa-home" ></i> Notes </span></a>
				  
				   <!--<li><a href="Tryit Editor/index.html"><i class="fa fa-home" ></i> Try to Editor </span></a>-->
				   
				    <li><a href="query.php"><i class="fa fa-home" ></i> Query  </span></a>
					
					<li><a href="student_view.php"><i class="fa fa-home" ></i> Chat  </span></a>
                    
                  </li>
				  
				  <?php   
					        $q = "select * from course where cid = '$stu_cou'";
	                         $res = mysqli_query($conn,$q);
		          ?>
							 <?php
								while($r=mysqli_fetch_assoc($res))
								{
								$courseid = $r['cid'];
							?>
                  <li><a><i class="fa fa-edit"></i><?php echo $r['cname'] ?> <span class="fa fa-chevron-down"></span></a>
				  
							
							 
                    <ul class="nav child_menu">
                     <!-- <li><a href="course">registration</a></li>-->                   <?php   
					        $q11 = "select * from chepter where coid = '$courseid'";
	                         $res11 = mysqli_query($conn,$q11);
		          ?>
							 <?php
								while($r11=mysqli_fetch_assoc($res11))
								{
							?>       
                      <li><a href="topic_desc.php?sid=<?php echo $r11['chpid'] ?>"><?php echo $r11['cheptername'] ?></a></li>
							  <?php
							  }
							  ?>
					  
                    </ul>
				</li>
					
                  <?php
						}
					?>
				 </ul>  

              </div>

            </div>
            <!-- /menu footer buttons -->
            <!--<div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top"  title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>-->
            
            <!-- /menu footer buttons -->