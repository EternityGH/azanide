<?php

include_once('database.php');

$conn = dbConnect();

session_start();

if(isset($_POST['register'])){
    $name       = $_POST['txtName'];
    $pass       = $_POST['txtPass'];
    $repass     = $_POST['txtRepass'];
    $mail       = $_POST['txtMail'];
    $role       = 1;
    $gender     = $_POST['radGender'];
    $phone      = "";
    $address    = "";


    //Bắt Lỗi
    $error_name     = '';
    $error_pass     = '';
    $error_repass   = '';
    $error_mail     = '';
    $bool = false;

    if(strlen(trim($name)) < 3) {
        $error_name = 'Name must be more than 3 letters';
        $bool = true;

    }
    $sql = "SELECT email FROM user WHERE email = '$mail' ";

    if(strlen(trim($mail)) < 4) {
        $error_mail = 'mail must be more than 3 letters';
        $bool = true;
    }else{
        if ($conn->query($sql)->num_rows > 0) {
            # code...
               $error_mail = 'Email already exists';
            $bool = true;
        }
    }

 
    // if ($conn->query($sql)->num_rows > 0) {
    //     # code...
    //        $error_mail = 'Email already exists';
    //     $bool = true;
    // }

    if(strlen(trim($pass)) < 8) {
        $error_pass = 'Password must be more than 8 letters';
        $bool = true;
    }

    if(trim($pass) != trim($repass) ) {
        $error_repass = 'Password must be matched';
        $bool = true;
    }


    if($bool){

        $_SESSION['error'] = array(
            'error_name'    => $error_name,
            'error_mail'    => $error_mail,
            'error_pass'    => $error_pass,
            'error_repass'  => $error_repass
        );

        $_SESSION['data'] = array(
            'name' => $name,
            'mail' => $mail
        );

        header('location: ../register.php');

    } else {

        $sql = "INSERT INTO user(name, email, password, address, phone, gender, role) VALUES('$name', '$mail', '$pass', '$address', '$phone', '$gender', '$role')";

        $statement = $conn->query($sql);

        if($statement){
            header('location: ../login.php');
        }

    }    

    
}

?>