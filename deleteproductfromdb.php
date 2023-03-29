<?php 
	$conn = @mysqli_connect("localhost:3306","root","","acme_products");
	$formResult = "";
	// Check connection
	
	if (mysqli_connect_errno())
	{
		echo "<p>Failed to connect to MySQL and the test db: " . mysqli_connect_error() . "</p>";
	}
	else
	{
		echo "<p>Connected to MySQL and the test DB</p>";
	}		
		
	$query = "DELETE FROM products WHERE id= ". $prodID;
	$results = mysqli_query($conn,$query);
	$numRowsAffected = mysqli_affected_rows($conn);
	if (!$results) 
	{
		echo "<p>Error deleting product data: " . mysqli_error($conn) . "</p>";
	}
	else 
	{
		if ($numRowsAffected == 0) 
		{
			echo "<p>Error - product not found.";
		}
		else 		
		{		
			$formResult = "Product with ID " . $prodID . " was successfully deleted";
		}
	}
		
	//Close the connection
	mysqli_close($conn);
?>
