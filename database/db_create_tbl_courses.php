<?php  
    require_once('../db/connection.php');
    $tablename = 'tbl_courses';
    $sqlQuery = "create table ". $tablename ."(
        course_id int(6) unsigned auto_increment primary key, 
        course_no varchar(10) not null,
        section varchar(30) not null, 
        descriptive_title varchar(255) not null,
        teacher_id varchar(10) not null unique,
        student_id varchar(10) not null,
        course_profile varchar(255), 
        course_code varchar(10) not null,
        created_at timestamp default current_timestamp,
        updated_at timestamp default current_timestamp on update current_timestamp
    )"; 
    if($conn->query($sqlQuery)){
        echo $tablename ." is successfully created. ";
    }else{
        echo "failed creating table (". $tablename .") Error: ". $conn->error;
    } 
    $conn->close(); 

?>