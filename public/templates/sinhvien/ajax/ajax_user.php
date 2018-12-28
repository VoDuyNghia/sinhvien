<?php
include $_SERVER["DOCUMENT_ROOT"] . "/public/templates/function/dbconnect.php";
session_start();

$uname = mysqli_real_escape_string($connect,$_POST['username']);
$password = mysqli_real_escape_string($connect,$_POST['password']);

if ($uname != "" && $password != ""){

    $sql_query = "SELECT Count(*) as cntUser FROM tb_member where user_member = '$uname' and password_member = '$password' LIMIT 1";
    $result = mysqli_query($connect,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
       $query = " SELECT * FROM tb_member where user_member = '$uname' and password_member = '$password' LIMIT 1";
        $result = mysqli_query($connect, $query);
        $row = mysqli_num_rows($result);
        $arUser = mysqli_fetch_assoc($result);
        $_SESSION['arUser'] = $arUser;

        if($_SESSION['arUser']['active_member'] == 2) {
            echo 2;
        } else {
            echo 1;
        }
    } else {
        echo 0;
    }

    
    // if($row > 1) {
    //     $_SESSION['arUser'] = $arUser;
    //     $_SESSION['timeout'] = $currentTime + $expired;
    //    echo 1;
    // } else {
    //     echo 0;
    // }

    // $sql_query = "SELECT Count(*) as cntUser FROM tb_member where user_member = '$uname' and password_member = '$password' LIMIT 1";
    // $result = mysqli_query($connect,$sql_query);
    // $row = mysqli_fetch_array($result);

    // $count = $row['cntUser'];


    // $arUser = mysqli_fetch_assoc($result);

    // if($count > 0){
    //     $_SESSION['uname'] = $row;
    //     $_SESSION['arUser'] =  $row['cntUser']['id_member'];
    //     echo 1;
    // }else{
    //     echo 0;
    // }

}

