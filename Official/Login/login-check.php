<?php 
session_start(); 
include "../Connection/db_conn.php";

if (isset($_POST['userID']) && isset($_POST['password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $userID = validate($_POST['userID']);
    $password = validate($_POST['password']);
    $role = 'admin';

    if (empty($userID)) {
        header("Location: login.php?error=User ID is required");
        exit();
    }else if(empty($password)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{
        // hashing the password
        $password = md5($password);

        
        $sql = "SELECT * FROM users WHERE userID='$userID' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['userID'] === $userID && $row['password'] === $password && $row['role'] === $role) {
                $_SESSION['purok'] = $row['purok'];
                $_SESSION['userID'] = $row['userID'];
                header("Location: ../home page/home.php");
                exit();
            }else{
                header("Location: login.php?error=Incorect user ID or password or you are not an admin");
                exit();
            }
        }else{
            header("Location: login.php?error=Incorect user ID or password");
            exit();
        }
    }
    
}else{
    header("Location: login.php");
    exit();
}