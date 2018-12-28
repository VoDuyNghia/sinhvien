<?php
include $_SERVER["DOCUMENT_ROOT"] . "/public/templates/function/dbconnect.php";
session_start();

$email = mysqli_real_escape_string($connect,$_POST['email']);

if ($email != "" ){

    $sql_query = "SELECT Count(*) as cntUser FROM tb_member where email_member = '$email' LIMIT 1";
    $result = mysqli_query($connect,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $query = " UPDATE tb_member SET email_member ='' where email_member = '$email' LIMIT 1";
        $result = mysqli_query($connect, $query);
        echo 1;
    } else {
        echo 0;
    }
}

