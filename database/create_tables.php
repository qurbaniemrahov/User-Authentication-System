<?php
require_once '../config/database.php';

if ($conn) {
    try {

        $sql = "CREATE TABLE register (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            password VARCHAR(255) NOT NULL,
            reg_date TIMESTAMP
        )";



        $conn->exec($sql);
        echo "Table register created successfully";
    } catch (PDOException $e) {
        echo "Error creating table: " . $e->getMessage();  // Handle SQL errors
    }


    $conn = null;
} else {
    echo "Failed to connect to the database.";
}
