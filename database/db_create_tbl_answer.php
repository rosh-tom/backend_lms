<?php  
    require_once('../db/connection.php');
    $tablename = 'tbl_answer';
    $sqlQuery = "create table ". $tablename ."(
        ans_id int(11) unsigned auto_increment primary key, 
        ans_answer varchar(10) not null,
        qst_id int(11) unsigned not null,
        user_id int(11) unsigned not null,
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