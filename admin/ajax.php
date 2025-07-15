<?php
	include("connection.php");
	
	if(isset($_REQUEST['state']))
	{
		$id = $_REQUEST['state'];
		$sel = "select * from chepter where coid = '$id'";
		$res = mysqli_query($conn,$sel);
		?>
		<div class="form-group">
			
			<table><tr><td><select name="sel_city" required="" class="form-control"  onChange="showstate1(this.value)">
            <option selected="selected" value="">-- Select Chepter --</option>
			<?php
			while($row = mysqli_fetch_array($res))
			{
			?>
			<option value="<?php echo $row['chpid'] ?>"><?php echo $row['cheptername'] ?></option>
			<?php
			}
			?>
		</select>
			</td></tr></table>
		</div>
		<?php
		
	}
?>