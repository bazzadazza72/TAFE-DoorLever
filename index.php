<!--
    DOOR LEVER INVENTORY ASSIGNMENT - index.php
    Developed by Bailey Camp on 26/10/2022
-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Acme Hardware - Login</title>
		<link rel="stylesheet" type="text/css" href="./style.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Google+Sans">
	</head>
	<body>
		<h1 class="acmeTitle">Acme Hardware</h1>
		<h3><i>Login</i></h3><br/>
		<form id="form1" name="form1" method="post" action="processform.php">
			<label for="prodName">Username:</label> <input name="userName" id="userName" type="text" /> *<br />
			<label for="prodCost">Password:</label> <input name="password" id="password" type="password"> *</input><br /><br />
			<input name="submit" type="submit" value="Submit"/>
			<input type ="reset" name="reset" value="Clear" title="Reset Form"/>
		</form>
		<!--<p><i>Site written with </i>&#128151<i> by </i><a href="mailto:bailey.camp@student.tafesa.edu.au"><i>Bailey Camp</i></a></p>-->
	</body>
</html>