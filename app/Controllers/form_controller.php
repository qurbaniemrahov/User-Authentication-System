<?php

require_once '../../config/database.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
      
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

      
        $sql = "INSERT INTO register (username, email, password) VALUES (:username, :email, :password)";

        try {
           
            $stmt = $conn->prepare($sql);

          
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

          
            $stmt->execute();

            echo "User registered successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>




?>