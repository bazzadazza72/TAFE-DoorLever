<?php 
	$conn = @mysqli_connect("localhost:3306","root","","acme_products");

	// Check connection
	if (mysqli_connect_errno())
	{
		echo "<p>Failed to connect to MySQL and the test db: " . mysqli_connect_error() . "</p>";
	}
	else
	{
		echo "<p>Connected to MySQL and the test DB</p>";
				
		$query = "DELETE FROM customers WHERE id= ".$userID ;
		$results = mysqli_query($conn,$query);
		$numRowsAffected = mysqli_affected_rows($conn);
		if (!$results) 
		{
			echo "<p>Error deleting customer data: " . mysqli_error($conn) . "</p>";
		}
		else 
		{
			if ($numRowsAffected == 0) 
			{
				echo "<p>Error - user ID not found.";
			}
			else 		
			{		
				echo "<p>Customer ID ".$userID." successfully deleted</p>";
			}
		}
	}
		
	//Close the connection
	mysqli_close($conn);
?>
