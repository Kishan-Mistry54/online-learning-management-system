	<?php 
	include('connection.php');
	//include("session.php"); 
?>
<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>Smt. Sumatiben R. Bhatt Education Campus, Palsana-Baleshwar Rd, Palsana, Gujarat 394315</address>
					<p>
						<i class="icon-phone"></i> +91 98251 65231  <br>
						<i class="icon-envelope-alt"></i> dollybendesaiinstitute@yahoo.co.in
					</p>
				</div>
			</div>
			<!--<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div> -->
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Event</h5>
					<ul class="link-list">
					<marquee direction="down">
						<?php
		$i=1;
		$res="select * from event join faculty_reg on faculty_reg.fid=event.manageby";
		$rel=mysql_query($res);
		while($row=mysql_fetch_array($rel))
		{
		?>
			<tr class="tr-data">
				<td><?php echo $i++ ?></td>
				<td><?php echo $row['eventname'] ?></td>
				<td><?php echo $row['date'] ?></td>
				
				<td><?php echo $row['time'] ?></td>
			<td><b style="color:black"><?php echo $row['place']?></b></a></td>
			
				<hr />
				
				
			
				
				
				
			</tr>
			<br />
		<?php
		}
	?></marquee>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<marquee direction="down">
					
					<?php
		$i=1;
		$res="select * from news where status='Active' ";
		$rel=mysql_query($res);
		while($row=mysql_fetch_array($rel))
		{
		?>
			<tr class="tr-data">
				
				
				<td><?php echo $row['date'] ?></td>
				
			
				<td><?php echo $row['news'] ?></td>
			
			
				<hr />
				
				
			</tr><br />
		<?php
		}
	?>
					
					
					</marquee>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span> </span><a href="http://webthemez.com/" target="_blank"></a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						
						<li><a href="../login.php" data-placement="top" title="Admin"><i class="fa fa-pinterest"></i> Admin</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>