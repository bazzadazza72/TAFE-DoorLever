<?php 
$conn = mysqli_connect("localhost", "root", "");

if ($conn === false) {
    echo "The connection has failed: " . mysqli_connect_error();
} else {
    echo "Successfully connected to mySQL!";
    if (!mysqli_select_db($conn, "test")) {
        echo "<p>Could not open the database: " . mysqli_error($conn) . "</p>";	
    } else {
        echo "<p>Database selection successful</p>";
        $insert = "INSERT INTO names (name, age) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $insert);
        mysqli_stmt_bind_param($stmt, "si", $_POST['name'], $_POST['age']);
        if (mysqli_stmt_execute($stmt)) {
            //update successful, retrieve the auto id - NameID
            $nameID = mysqli_insert_id($conn);
        } else {
            echo "table query failed: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    }
}
//Close the connection
mysqli_close($conn);
?>