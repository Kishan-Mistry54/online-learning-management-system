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
					
					<?php echo $admin ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    
					<li><a href="chngpwd.php"><i class="fa fa-spinner fa-spin pull-right"> </i> Change Password </a></li>
                    <li><a href="logout.php"><i class="fa fa-power-off pull-right">
					</i> Log Out</a></li>
					
                  </ul>
                </li>

               </ul>
            </nav>
          </div>
        </div>