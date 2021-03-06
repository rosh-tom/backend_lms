<?php  
    require_once('../db/connection.php');
    $tablename = 'tbl_comments';
    $sqlQuery = "create table ". $tablename ."(
        comment_id int(6) unsigned auto_increment primary key, 
        comment text not null,
        post_id int(11) unsigned not null,
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