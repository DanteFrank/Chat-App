<?php

    include "db.inc.php";


    $user = $_SESSION['email'];
    $get_user = "SELECT * FROM users WHERE user_email ='$user' ";
    $run_user = mysqli_query($conn, $get_user);
    $row = mysqli_fetch_array($run_user);

    $user_id = $row['user_id'];
    $user_name = $row['users_name'];

    if (isset($_GET['user_name'])) {
        global $conn;

        $get_username = test_input($_GET['user_name']);
        $sql = "SELECT * FROM users WHERE users_name = '$user_name' ";
        $query = mysqli_query($conn, $sql);
        $row_user = mysqli_fetch_array($query);

        $username = $row_user['users_name'];
        $user_profile_image = $row_user['user_profile'];
    }

    $total_messages = "SELECT * FROM users_chat WHERE (sender_username='$user_name' AND receiver_username='$username') OR (receiver_username='$user_name' AND sender_username='$username)";

    $run_messages = mysqli_query($conn, $total_messages);
    $total_result = mysqli_num_rows($run_messages);



    //Log Out
    if (isset($_POST['logout'])) {
    
        $update_msg = mysqli_query($conn, "UPDATE users SET log_in = 'Offline' WHERE $users_name = $user_name");
        header("Location: logout.inc.php");
        exit();
    }
    