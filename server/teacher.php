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
                    $_SESSION['teacher_id'] = $row['teacher_id'];
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
            'course_no' => $_POST['course_no'],
            'section'   => $_POST['section'],
            'title'     => $_POST['title']
        ]; 
        $sqlQuery = "insert into tbl_courses(course_no, section, descriptive_title, teacher_id) values(
            '". $data['course_no'] ."',
            '". $data['section'] ."',
            '". $data['title'] ."',
            '". $_SESSION['id'] ."'
            )";
        if($conn->query($sqlQuery) === true){
            $_SESSION['message'] = "New Course Added: ". $data['title'];
            header("location: ../dashboard_teacher.php");
        }else{
            echo $conn->error;
        }
        
    }


?>