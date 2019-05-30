<?php
    include 'database.php';

    $conn = dbConnect();

    session_start();

    if(isset($_POST['login'])){
        $email = $_POST['lg_email'];
        $pass = $_POST['lg_password'];
        $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";
        
        $statement = $conn->query($sql);

        if($statement->num_rows > 0){

            $result = $statement->fetch_assoc();

            if($result['role'] == 0){

                $_SESSION['login'] = $result;

                header("Location: ../admin/index.php");
            } else {

                $_SESSION['login'] = $result;

                header("Location: ../index.php");
            }

        } else {
            $_SESSION['Error_login'] = "Email or Password Incorrect";
            header("Location: ../login.php");
        }
        
        
    }
?>
