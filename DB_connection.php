<?php
$servername = "localhost";
$username = "root";
$password = "holyit@1";
$db_in = "hms_db";

try {
    $conn = mysqli_connect($servername, $username, $password, $db_in);
	if($conn === false)
	{
    		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	else
	{    
		echo "Connected successfully"; 
		

		$cust_name = mysqli_real_escape_string($conn, $_POST['cName']);
			echo $cust_name."<br>";
		$cust_phno = mysqli_real_escape_string($conn, $_POST['cNo']);
			echo $cust_phno."<br>";
		$cust_email = mysqli_real_escape_string($conn, $_POST['eMail']);
			echo $cust_email."<br>";
		$cust_addr = mysqli_real_escape_string($conn, $_POST['addr']);
			echo $cust_addr."<br>";
		$referred_by = mysqli_real_escape_string($conn, $_POST['referredBy']);	
			echo $referred_by."<br>";	
		$proj_name = mysqli_real_escape_string($conn, $_POST['projectName']);
			echo $proj_name."<br>";
		$prosp_to_cust = mysqli_real_escape_string($conn, $_POST['prospToCust']);
			echo $prosp_to_cust."<br>";
		$cust_budget = mysqli_real_escape_string($conn, $_POST['budget']);
			echo $cust_budget."<br>";
		$cust_emp_stat = mysqli_real_escape_string($conn, $_POST['emp']);
			echo $cust_emp_stat."<br>";
		$annual_revenue = mysqli_real_escape_string($conn, $_POST['aRevenue']);
			echo $annual_revenue."<br>";
		$existing_loan = mysqli_real_escape_string($conn, $_POST['LoanYesNo']);
			echo $existing_loan."<br>";
		/*$existing_loan_type = mysqli_real_escape_string($conn, $_POST['listofLoans']);
			echo $existing_loan_type."<br>";
			
			foreach ($_POST['listofLoans'] as $select)
			{
				echo "You have selected :" .$select; // Displaying Selected Value
			}*/
			print_r($_POST['listofLoans']);
		$cust_type = mysqli_real_escape_string($conn, $_POST['cradio']);
			echo $cust_type."<br>";
		$cust_status = mysqli_real_escape_string($conn, $_POST['custStatus']);
			echo $cust_status."<br>";
		$reminder_date = mysqli_real_escape_string($conn, $_POST['rDate']);
			echo $reminder_date."<br>";
		$cust_notes = mysqli_real_escape_string($conn, $_POST['notes']);
			echo $cust_notes."<br>";
		/*$cust_id  = mysqli_real_escape_string($conn, $_POST['firstname']);*/

		

		/*$sql="INSERT INTO Persons (FirstName, LastName, Age)
		VALUES ('$firstname', '$lastname', '$age')";

		if (!mysqli_query($con,$sql)) 
		{
  			die('Error: ' . mysqli_error($con));
		}
		else
		{	
			echo "1 record added";
		}
		mysqli_close($con);*/

	}
    }
catch(Exception $e)
    {
    echo "Error occured: " . $e->getMessage();
    }
?>