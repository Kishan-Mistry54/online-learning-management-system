<?php
	include("connection.php");
	
	$id = $_REQUEST['field'];
	$value = $_REQUEST['query'];
	
	if($id == 'city' )
	{
	?>
	<select class="form-control" maxlength="100" name="city_nm" style="width:290px">
	<?php
	$q1="SELECT * FROM city where state_id='$value'";
	$r = mysqli_query($conn,$q1);
	while($roww1 = mysqli_fetch_array($r))
	{
	?>
	
	<option value="<?php echo $roww1['city_id'] ?>"><?php echo $roww1['city_name'] ?></option>
	
	<?php
	}
	?>
	
	 </select>
	
	<?php
	}
?>
		
<?php /*?>echo"<option>.....Select City Name.....</option>";
while($R1=mysqli_fetch_array($q1))
{
$name=$R1['city_name'];
$cid=$R1['city_id'];
echo"<option value='$cid' >$name</option>";
<?php */?>