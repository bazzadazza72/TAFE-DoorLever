<?php
    // Declares the MySQL connection and the database name for later use
	$conn = mysqli_connect("localhost:3306","root","");
    //$dbName = "acmeprods";

	// Checks if the connection to MySQL was successful
	if (mysqli_connect_errno())
	{
		echo "<p>Failed to connect to MySQL: " . mysqli_connect_error() . "</p>";
	}
	else
	{
		echo "<p>Connected to mysql</p>";
        // Creates the database and tables
		$query="DROP DATABASE IF EXISTS acmeprods;";
        $query.="CREATE DATABASE acmeprods;";
        $query.="USE acmeprods;";
        $query.="CREATE TABLE IF NOT EXISTS products(id int auto_increment not null primary key, prodName varchar(30) not null, prodFinish varchar (30) not null, prodUsage varchar (30) not null, prodCost float(8,2) not null);";

		if (mysqli_multi_query($conn,$query)) 
		{
            // Shows a message to the user stating the products database was created because it didn't exist
			echo "<p>The products database doesn't exist and was created.</p>";
			do
			{
				mysqli_next_result($conn);	
			} while (mysqli_more_results($conn));
		}
		else 
		{
			echo "<p>Error: " . mysqli_error($conn) ."</p>";
		}
	}
?>