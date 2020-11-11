<?php  
    require_once('../db/connection.php');
    $tablename = 'tbl_questionnaires';
    $sqlQuery = "create table ". $tablename ."(
        q_id int(11) unsigned auto_increment primary key,
        q_title varchar(100),
        q_description text,
        q_type varchar(255) not null,
        q_items int(11) unsigned,
        course_id int(11) unsigned,
        teacher_id int(11) unsigned,
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