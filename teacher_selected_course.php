<?php include('includes/header.php'); ?>   
 <?php 
    require_once("db/connection.php");
    $sqlQuery = "select * from tbl_courses where course_id = '". $_GET['id'] . "' and teacher_id=". $_SESSION['teacher_id']; 
    
    $_SESSION['current_course_id'] = $_GET['id'];
    $result = $conn->query($sqlQuery);
    $row = $result->fetch_assoc();
    $title = $row['descriptive_title'];  
 ?>
    <title><?= $title ?></title>
    </head> 
<body> 
 <!-- CODE HERE   --> 
<div class="container"> 
<?php 
   if (isset($_SESSION['message'])) {
     echo $_SESSION['message'];
     unset($_SESSION['message']);
   }
 
 ?>
  <!-- content  -->  
  <a href="dashboard_teacher.php"><= Back </a>
 <p>Welcome to <?= $title ?></p>  
 
 <a href="compose.php">Compose</a>
 <a href="">Create </a>
 <a href="">Chats</a>
 <a href="">Students</a>
 <br><br>
 <?php 
   $sqlQuery = "select * from tbl_posts where teacher_id=". $_SESSION['teacher_id']  ." and course_id=". $_GET['id'] ." order by created_at desc";
   $result = $conn->query($sqlQuery);
   if($result->num_rows>0){
   while($row = $result->fetch_assoc()){ 
 ?>

 <label><b><?= $row['title'] ?></b></label>
 <p><?= $row['description'] ?><br>
 
 <a href="">Comment</a>
</p>
 
 <?php  
      }  }else{
         echo "<p>No post</p>";
      }
 ?>
  <!-- /content  --> 
</div>          
        <!-- .container  --> 

<!-- ============================ FOOTER  --> 
 
  
<?php include('includes/footer.php'); ?>