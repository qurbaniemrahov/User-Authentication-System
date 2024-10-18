<?php 
require_once '../../config/database.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 

  
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

 
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
        if (!isset($conn)) {
            die("Database connection not established.");
        }

        try {
          
            $sql = "INSERT INTO register (username, email, password) VALUES (:username, :email, :password)";
            
          
            $stmt = $conn->prepare($sql);
            
           
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);  // Use hashed password
            
           
            $stmt->execute();
            echo "Registration successful!";
        } catch (Exception $e) {
     
            echo "Error: " . $e->getMessage();
        }
    }

    
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

     
        if (!isset($conn)) {
            die("Database connection not established.");
        }

        try {
           
            $sql = "SELECT * FROM register WHERE email = :email";
            
        
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            
           
            $stmt->execute();
            
    
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

       
            if ($user && password_verify($password, $user['password'])) {
      
                session_start();
                $_SESSION['username'] = $user['username'];
                echo "Login successful! Welcome, " . $_SESSION['username'];
            } else {
                echo "Invalid email or password.";
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>