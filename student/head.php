<div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../CSS/images/user.png" alt="">
					<?php
					$sphp = "select * from student_reg where email = '$user'";
					$rphp = mysqli_query($conn,$sphp);
					$rowphp = mysqli_fetch_assoc($rphp);
					$codephp = $rowphp['fname'];
					?>
					<?php echo $codephp ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="fac_info.php"> Profile</a></li>
                    
                    <!--<li><a href="javascript:;">Help</a></li>-->
                    <li><a href="chngpwd.php"><i class="fa fa-spinner fa-spin pull-right"> </i> Change Password </a></li>
					<li><a href="logout.php"><i class="fa fa-power-off pull-right">
						</i> Log Out</a></li>
					
                  </ul>
                </li>
				
			<li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    
					<?php
					$user = $_SESSION['student'];
					$sel = "select * from student_reg where status = 'send'";
					$res1 = mysqli_query($conn,$sel);
					if(mysqli_num_rows($res1))
					{	
						$tot = 1;
						while($row=mysqli_fetch_array($res1))
						{
							$tot++;
						}
					?>
						<span class="badge bg-green"><?php echo $tot; ?></span>	
					<?php
					}
					?>
                  </a>
                  
            	</li>
              </ul>
          </nav>
     </div>
</div>