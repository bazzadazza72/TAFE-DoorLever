<?php
    $emailErr = "";
    $invalidData = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prodID = checkInput($_POST["prodID"]);

        if ($prodID == ""){
            $emailErr = "Product ID must not be blank.";
            $invalidData = true;
        }
    }
?>