<?php  
    require_once('../db_config/connection.php');
    $tablename = 'tbl_teachers';
    $sqlQuery = "create table ". $tablename ."(
        teacher_id int(6) unsigned auto_increment primary key, 
        firstname varchar(30) not null,
        middle_name varchar(30),
        lastname varchar(30) not null,
        email varchar(30) not null unique,
        password varchar(255) not null,
        profile_pic varchar(255), 
        type varchar(10) not null,
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