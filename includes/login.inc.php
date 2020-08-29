<?php

if(isset($_POST['login'])){

    require "db.inc.php";

    //Set Variables
    $email = test_input($_POST['email']);
    $password = test_input($_POST['pwd']);

    if (empty($email) || empty($password)) {
        header("Location: ../index.php?EmptyFileds");
        exit();
    } else{
        //Sql statemetns
        $sql = "SELECT * FROM users WHERE user_email = ? OR users_name = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, 'ss', $email, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                //Set Variable For Passowrd Check
                $passwordCheck = password_verify($password, $row['user_pwd']);

                //Checking Password
                if ($passwordCheck == false) {
                    header("Location: ../index.php?WrongPassword");
                    exit();
                } elseif ($passwordCheck == true) {
                    session_start();
                    $_SESSION['userID'] = $row['user_id'];
                    $_SESSION['email'] = $row['user_email'];

                    header("Location: ../home.php?LoginSuccessful!");
                    exit();
                } else {
                    header("Loaction: ../index.php?Wrong Passwrod");
                    exit();
                }
            } else {
                header("Location: ../index.php?NoUser");
                exit();
            }

        }
    }


} else {
    header("Location: ../index.php");
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}