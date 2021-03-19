<?php

    require 'connexion.php';

    function createrandom_pub_id() {
        $chars = "003232303232023232023456789";
        srand((double)microtime()*1000000);
        $i = 0;
        $pass = '' ;
        while ($i <= 7) {
      
          $num = rand() % 33;
      
          $tmp = substr($chars, $num, 1);
      
          $pass = $pass . $tmp;
      
          $i++;
      
        }
        return $pass;
      }
      $pub_id='Id-'.createrandom_pub_id();


    //for adding data
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $class = $_POST['class'];
    $position = $_POST['position'];

    if ($position == 'staff') {
        $sqli = "INSERT INTO staff (full_name,email,password,class,idadm) values('$name','$email','$pass','$class',1)";
        $stm = $connection->query($sqli);
        $sqli_1 = "INSERT INTO users (email,PASSWORD,POSITION,pub_id) values('$email','$pass','$position',1)";
        $stm1 = $connection->query($sqli_1);
        header('location: ../dash-admin.php');
    } else {
        $sqli = "INSERT INTO students (full_name,email,password,class,idadm,pub_id) values('$name','$email','$pass','$class',1,'$pub_id')";
        $stm = $connection->query($sqli);
        $sqli_1 = "INSERT INTO users (email,PASSWORD,POSITION,pub_id) values('$email','$pass','$position','$pub_id')";
        $stm1 = $connection->query($sqli_1);
        header("location: ../dash-admins_student.php?id=$pub_id");
    }
}
if (isset($_POST['add_std'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $class = $_POST['class'];
    $position = 'students';

    $sqli = "INSERT INTO students (full_name,email,password,class,idadm) values('$name','$email','$pass','$class',1)";
    $stm = $connection->query($sqli);
    $sqli_1 = "INSERT INTO users (email,PASSWORD,POSITION) values('$email','$pass','$position')";
    $stm1 = $connection->query($sqli_1);
    header('location: ../dash-stf.php');
}

    //for editing staff  data
        if (isset($_POST['edit'])) {
            $id = $_POST['id_edited'];
            $name = $_POST['name_edited'];
            $email = $_POST['email_edited'];
            $pswd = $_POST['pass_edited'];
            $cls = $_POST['class_edited'];

            $sqli = "UPDATE staff SET full_name = '$name', email = '$email', password='$pswd', class ='$cls' WHERE staff.idstf = $id";
            $stm = $connection->query($sqli);

            header('location: ../dash-admin.php');
        }

        //for editing students  data
        if (isset($_POST['edit_std'])) {
            $id = $_POST['id_edited'];
            $name = $_POST['name_edited'];
            $email = $_POST['email_edited'];
            $pswd = $_POST['pass_edited'];
            $cls = $_POST['class_edited'];

            $sqli = "UPDATE students SET full_name = '$name', email = '$email', password='$pswd', class ='$cls' WHERE students.idstd = $id";
            $stm = $connection->query($sqli);
            header('location: ../dash-admins_student.php');
        }
        if (isset($_POST['edit_std1'])) {
            $id = $_POST['id_edited'];
            $name = $_POST['name_edited'];
            $email = $_POST['email_edited'];
            $pswd = $_POST['pass_edited'];
            $cls = $_POST['class_edited'];

            $sqli = "UPDATE students SET full_name = '$name', email = '$email', password='$pswd', class ='$cls' WHERE students.idstd = $id";
            $stm = $connection->query($sqli);
            header('location: ../dash-stf.php');
        }
    //for removing data
    if (isset($_GET['del_stf'])) {
        $id = $_GET['del_stf'];

        $sqli = "DELETE from staff WHERE staff.idstf = $id";
        $stm = $connection->query($sqli);

        header('location: ../dash-admin.php');
    }
    if (isset($_GET['del_std'])) {
        $id = $_GET['del_std'];

        $sqli = "DELETE from students WHERE students.idstd = $id";
        $stm = $connection->query($sqli);

        header('location: ../dash-admins_student.php');
    }
    if (isset($_GET['del'])) {
        $id = $_GET['del'];

        $sqli = "DELETE from students WHERE students.idstd = $id";
        $stm = $connection->query($sqli);

        header('location: ../dash-stf.php');
    }
