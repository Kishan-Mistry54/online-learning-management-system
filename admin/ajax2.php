<?php
	include("connection.php");
	
	if(isset($_REQUEST['state']))
	{
		$id = $_REQUEST['state'];
		$sel = "select * from faculty_reg where faculty_code = '$id'";
		$res = mysqli_query($conn,$sel);
		?>
		<div class="form-group">
			
			<table><tr><td><select name="sel_city2" required="" class="form-control">
            <option selected="selected" value="">-- Select Faculty --</option>
			<?php
			while($row = mysqli_fetch_array($res))
			{
			?>
			<option value="<?php echo $row['faculty_code'] ?>"><?php echo $row['fname'] ?></option>
			<?php
			}
			?>
		</select>
			</td></tr></table>
		</div>
		<?php
		
	}
?>