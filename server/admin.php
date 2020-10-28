<?php session_start();  

    require_once("../db/connection.php"); 

    if(isset($_POST['login'])){
        $data = [
            'email'  => $_POST['email'],
            'pass'   => $_POST['password']
        ];  

        $sqlQuery   = "select * from tbl_admin where email = '". $data['email'] ."'";
        $result     = $conn->query($sqlQuery);

        if ($result->num_rows > 0) {
            $row    = $result->fetch_assoc();
            if(password_verify($data['pass'], $row['password'])){
                $_SESSION['id'] = $row['id'];  
                $_SESSION['isLoggedIn'] = $row['type'];
                header("location: ../admin/index.php");
            }else{
                $data['error'] = "Password did not match with the email"; 
                unset($data['password']);
                $_SESSION['message'] = $data;
                header("location: ../admin/login.php");         
            }
        }else{
            $data['error'] = "email not found."; 
            unset($data['email']);
            unset($data['password']);
            $_SESSION['message'] = $data;
            header("location: ../admin/login.php");
        }   
    } elseif (isset($_POST['save_teacher'])) {
        $data = [
            'firstname' => $_POST['firstname'],
            'middlename'  => $_POST['middlename'],
            'lastname'  => $_POST['lastname'],
            'email'     => $_POST['email'],
            'password'  => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'type'      => "Teacher"
        ]; 

        $sqlQuery = "insert into tbl_teachers(firstname, middle_name, lastname, email, password, type)
                    values ('". $data['firstname'] ."', '". $data['middlename'] ."', '". $data['lastname'] ."', '". $data['email'] ."',
                    '". $data['password'] ."', '". $data['type'] ."')";
        if($conn->query($sqlQuery) === true){
            echo "Hello World";
        }else{
            echo $conn->error;
        }

    }


?>