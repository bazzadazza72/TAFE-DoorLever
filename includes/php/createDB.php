<!--
    DOOR LEVER INVENTORY ASSIGNMENT - createDB.php
    Developed by Bailey Camp on 16/11/2022
-->
<?php
    // Declares the MySQL connection and the database name for later use
	$conn = mysqli_connect("localhost:3306","root","");

	// Checks if the connection to MySQL was successful
	if (mysqli_connect_errno())
	{
		echo "<p>Failed to connect to MySQL: " . mysqli_connect_error() . "</p>";
	} else {
		echo "<p>Connected to MySQL</p>";
        // Creates the database and tables
		$query="DROP DATABASE IF EXISTS acme_products;";
        $query.="CREATE DATABASE acme_products;";
        $query.="USE acme_products;";
        $query.="CREATE TABLE IF NOT EXISTS products(id int auto_increment not null primary key, prodName varchar(30) not null, prodFinish varchar (30) not null, prodUsage varchar (30) not null, prodCost float(8,2) not null, imagePath varchar(500) not null);";

		if (mysqli_multi_query($conn,$query)) 
		{
            // Shows a message to the user stating the products database was created because it didn't exist
			echo "<p>The products database doesn't exist and was created.</p>";
			do {
				mysqli_next_result($conn);	
			} while (mysqli_more_results($conn));
		} else {
			echo "<p>There was an internal error: " . mysqli_error($conn) ."</p>";
		}
	}
?>