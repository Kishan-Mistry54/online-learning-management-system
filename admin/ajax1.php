<?php
	include("connection.php");
	
	if(isset($_REQUEST['state']))
	{
		$id = $_REQUEST['state'];
		$sel = "select * from subjectmaster where seid = '$id'";
		$res = mysqli_query($conn,$sel);
		?>
		<div class="form-group">
			
			<table><tr><td><select name="sel_city1" required="" class="form-control" >
            <option selected="selected" value="">-- Select Subject --</option>
			<?php
			while($row = mysqli_fetch_array($res))
			{
			?>
			<option value="<?php echo $row['subid'] ?>"><?php echo $row['subjectname'] ?></option>
			<?php
			}
			?>
		</select>
			</td></tr></table>
		</div>
		<?php
		
	}
?>