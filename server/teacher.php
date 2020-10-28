<?php session_start();
    require_once("../db/connection.php");
    if (isset($_POST['btn_loginTeacher'])) {
        $teacher = [
            'email' => $_POST['email'],
            'password' => $_POST['password']
        ];
        $message = [];
        $sqlQuery   = "select * from tbl_teachers where email = '". $teacher['email'] ."'";
        $result     = $conn->query($sqlQuery);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
                if(password_verify($teacher['password'], $row['password'])){
                    $_SESSION['isLoggedIn'] = $row['type'];
                    $_SESSION['id'] = $row['teacher_id'];
                    header("location: ../dashboard_teacher.php");
                }else{
                    $_SESSION['error'] = "Password did not match with the email. "; 
                    header("location: ../login_teacher.php");
                } 
        }else{  
            $_SESSION['error'] = "Email not Found";  
            header("location: ../login_teacher.php"); 
        } 
    }elseif (isset($_POST['btn_addCourse'])) {
        $data = [
            
        ];

        echo $_POST['course_no'];
        echo $_POST['section'];
        echo $_POST['title'];
        
    }


?>