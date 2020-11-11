<?php session_start();
    require_once("../db/connection.php");

    if(isset($_POST['btn_post'])){
        // $data = [
        //     'title' => $_POST['title'],
        //     'description' => $_POST['description'],
        //     'type' => $_POST['type'],

        // ]; 
        $target = "../Uploads/".basename($_FILES['uploaded_file']['name']);
        $image = $_FILES['uploaded_file']['name'];
        $extension = pathinfo($image, PATHINFO_EXTENSION);

        move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target); 
        echo $extension;
 


        // if($data['type'] == 'Anouncement'){ 
        //     $sqlQuery = "insert into tbl_posts(title, description, type, teacher_id, course_id)
        //                 values('". $data['title'] ."', '". $data['description'] ."', '". $data['type'] ."', ". $_SESSION['teacher_id'] .", ". $_SESSION['current_course_id'] .")";
        //     if($conn->query($sqlQuery)){
        //         $_SESSION['message'] = "New Post Created";
        //         header("location: ../teacher_selected_course.php?id=". $_SESSION['current_course_id']. "");
        //     }else{
        //         $_SESSION['message'] = $conn->error; 
        //         header("location: ../teacher_selected_course.php?id=". $_SESSION['current_course_id']. "");
        //     }
        // }
    }



?>

