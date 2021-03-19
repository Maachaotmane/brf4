<?php

    require 'connexion.php';
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $connect = $connection->query($qry);
    $rows_number = mysqli_num_rows($connect);
    //Check whether the query was successful or not
    if ($connect) {
        if ($rows_number > 0) {
            //Login Successful
            session_regenerate_id();
            $member = mysqli_fetch_assoc($connect);
            $_SESSION['SESS_ID'] = $member['Id'];
            $_SESSION['SESS_EMAIL'] = $member['email'];
            $_SESSION['SESS_POSITION'] = $member['POSITION'];
            $name = $_SESSION['SESS_EMAIL'];
            $position = $_SESSION['SESS_POSITION'];
            $id = $member['pub_id'];
            //session_write_close();
            if ($position == 'admin') {
                header('location: ../dash-admin.php');
            } elseif ($position == 'staff') {
                header('location: ../dash-stf.php');
            } else {
                header("location: ../dash-std.php?id=$id");
            }

            exit();
        } else {
            //Login failed
            $message = 'Something Went Wrong.';

            echo "
            <SCRIPT>
            alert('$message') 
            window.location.replace('../index.php');
            </SCRIPT>
            ";
            exit();
        }
    } else {
        die('Query failed');
    }
