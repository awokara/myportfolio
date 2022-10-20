<?php
include 'config.php';

//
if ($_SERVER['REQUEST_METHOD']=="POST"){
    // echo 'yes'; 
    print_r($_POST);


    //validation for name
    $isError = false;
    if(empty($_POST['fname'])){
        $fError = "Fullname is required";
        $isError = true;
    }elseif(is_numeric($_POST['fname'])){
        $fError = "Fullname cannot be number";
        $isError = true;
    }else{
        $fname = cleanInput($_POST['fname']);
    }

    //validation for phone no
    if(empty($_POST['phone'])){
        $pError = "Phone number is required";
        $isError = true;
    }elseif(!is_numeric($_POST['phone'])){
        $pError = "Phone number must be a valid number";
        $isError = true;
    }else{
        $phone = cleanInput($_POST['phone']);
    }

    //validation for email
    if(empty($_POST['email'])){
        $eError = "Email address is required";
        $isError = true;
    }elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $eError = "Valid email address required";
        $isError = true;
    }else{
        $email = cleanInput($_POST['email']);
    }

    

    if($isError==false){
        //run sql
        // $pass = md5($pass);
        $userid = md5(date("Ymdhis").rand(203991, 483644));
    //     print_r($_POST);
    // die;
    
        $sql = $conn->query("INSERT INTO dlog SET userid='$userid', dfname='$fname', dphone='$phone',  demail='$email' ");
    
        if($sql){
            echo "Submitted";
        }else{
            echo "Fail";
        }
    }
}

