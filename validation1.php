<?php
include('connection.php'); 
$value = $_GET['query'];
$formfield = $_GET['field'];
		
		if ($formfield == "email") 
		{
			if (empty($value)) 
			{
				echo "Required"."<br>";
			}
			else
			{
				if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$value)) 
				{
					echo "Invalid Email";
				}
				else
				{
					$sel = "select * from student_reg where email='$value'";
					mysqli_query($conn,$sel);
					//$arr = array('pr_email'=>$value);
					//$sel = $this->mymodel->selectwhere("patient_reg",$arr);
					if(count($sel) > 0)
					{
					?>
						<input type="hidden" name="cno" value="<?php //echo $sel[0]['c_cnumber'] ?>" />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="review_submit" type="submit" name="btn_submit" class="btn dento-btn" value="Submit">Submit</button><br><br>
					<?php
					}
					else
					{
						echo "This Email not Exist..!";
					}
				}
			}
		}
		if ($formfield == "otp") 
		{
			
		}

?>