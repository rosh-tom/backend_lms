<?php  
    require_once('../db_config/connection.php');
    $tablename = 'tbl_uploads';
    $sqlQuery = "create table ". $tablename ."(
        upload_id int(11) unsigned auto_increment primary key, 
        location varchar(255) not null,
        posts_id int(11), 
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