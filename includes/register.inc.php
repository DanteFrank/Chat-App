<?php 

$nameErr = $emailErr = $pwdErr = $countryErr =  $genderErr = "";
if (isset($_POST['register'])) {
    
    require "db.inc.php";

    //Set Variables
    $userName = test_input($_POST['username']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['pwd']);
    $confirmPassword = test_input($_POST['confirm_pwd']);
    $country = test_input($_POST['country']);
    $gender = test_input($_POST['gender']);
    $rand = rand(1, 2);

    if (empty($userName) || empty($email) || empty($password) || empty($confirmPassword) || empty($country) || empty($gender)) {
        header("Location: ../register.php?error=ALLFILEDS ARE EMPTY");
        exit();
    } elseif(!preg_match("/^[a-zA-Z ]*$/", $userName)) {
        $nameErr = "Please Fill In A Valid Username";
        header("Location: ../register.php?ERROR=EMPTYUSERNAME");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Please Fill In A Valid Email Address";
        header("Location: ../register.php?ERROR=EMAIL");
        exit();
    } elseif($password !== $confirmPassword) {
        $pwdErr = "Password Does Not Match";
        header("Location: ../register.php?ERROR=PASSWORD");
        exit();
    } else {
        //Check if User Exists
        $sql = "SELECT users_name FROM users WHERE users_name = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../register.php?ERROR=FIRSTSQLERROR");
            exit();
        }else {
            mysqli_stmt_bind_param($stmt, 's', $userName);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            //If User Exists
            if ($resultCheck > 0) {
                header("Location: ../register.php");
                exit();
            } else {

                if ($rand == 1) 
                    $profile_pic = "images/profile_img1.png";
                elseif ($rand == 2) 
                    $profile_pic = "images/profile_img2.png";

                $sql = "INSERT INTO users (users_name, user_email, user_pwd, user_country, user_gender) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../register.php?ERROR=SECONDSQLERROR");
                    exit();
                } else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, 'sssss', $userName, $email, $hashedPwd, $country, $gender);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.php");
                }

            }


        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);




}








function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}