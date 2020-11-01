<?php


    $donaterName = $donaterPhoneNumber = $donaterEmail = $donatedAmount = $donatingIssue = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $donaterName = testInput($_POST["donaterName"]);
        $donaterPhoneNumber = testInput($_POST["donaterPhoneNumber"]);
        $donaterEmail = testInput($_POST["donaterEmail"]);
        $donatedAmount = testInput($_POST["donatedAmount"]);
        $donatingIssue = testIinput($_POST["donatingIssue"]);

        $data_to_insert = [
            'donaterName' => $donaterName,
            'donaterEmail' => $donaterEmail,
            'donaterPhoneNumber' => $donaterPhoneNumber,
            'donatedAmount' => $donatedAmount,
            'donatingIssue' => $donatingIssue
        ]
    }

    //sanitize input 
    function testInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }



   
    
?>