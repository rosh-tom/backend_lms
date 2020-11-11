<?php  
    require_once('../db/connection.php');
    $tablename = 'tbl_questions';
    $sqlQuery = "create table ". $tablename ."(
        quest_id int(11) unsigned auto_increment primary key,
        question varchar(100), 
        a text not null,
        b text not null,
        c text not null,
        d text not null,
        correct varchar (100) not null,
        q_id int(11) unsigned,
        teacher_id int(11) unsigned,
        course_id int(11) unsigned,
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