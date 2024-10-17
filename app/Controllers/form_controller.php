<?php

require_once '../../config/database.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
    if (isset($_POST['register'])) {
        echo "clicked";
    } else {
        echo "Register button not clicked";
    }
} else {
    echo "Not a POST request";
}










?>