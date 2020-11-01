<?php  
    require_once('../db/connection.php');
    $tablename = 'tbl_posts';
    $sqlQuery = "create table ". $tablename ."(
        post_id int(6) unsigned auto_increment primary key, 
        title varchar(100), 
        description text,  
        type varchar(100),
        location varchar(255),
        teacher_id int(11),
        course_id int(11),
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