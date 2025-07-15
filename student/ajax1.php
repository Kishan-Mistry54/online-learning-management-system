<?php 
	include('connection.php');
	include("session.php");
	
	if(isset($_REQUEST['type']))
	{
		$type = $_REQUEST['type'];
		
		if($type == 'image')
		{
		?>
		<input type="file" name="userfile" placeholder="Send Message" class="form-control" autofocus required>
		<?php
		}
		else if($type == 'document')
		{
		?>
		<input type="file" name="userfile" placeholder="Send Message" class="form-control" autofocus required>
		<?php
		}
		else
		{
		?>
		<input type="text" name="txt_msg" placeholder="Send Message" class="form-control" autofocus required>
		<?php
		}
		
	} 
?>