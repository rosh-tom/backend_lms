 <?php include('includes/header.php'); ?>  
<?php 
    require_once("db/connection.php");
    $sqlQuery = "select firstname, lastname from tbl_teachers where teacher_id = ". $_SESSION['teacher_id'];
    $result = $conn->query($sqlQuery);
    $row  = $result->fetch_assoc();
    $fname = $row['firstname'];
    $lname = $row['lastname'];  

?>
    <title>Teacher Dashboard</title>
    </head> 
<body> 
 <!-- CODE HERE   --> 
<div class="container"> 
  <!-- content  --> 
        <?php 
            if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
        
        ?>
        <h1>Welcome to <span><a href="index.php">SDSSU Learning Management System </a></span></h1>  
        <h1>Faculty:  <span><a href="index.php"><?= $fname ?> <?= $lname ?></a></span></h1> 

        <p><a href="teacher_create_course.php">Create Course</a></p>  
        <?php 
            $sqlQuery = "select * from tbl_courses where teacher_id = ". $_SESSION['teacher_id'];
            $result = $conn->query($sqlQuery);
            if (!$result->num_rows > 0){
               echo "NO Courses yet.";
            }else{
                while ($row = $result->fetch_assoc()) {
                    echo $row['section'] ." <a href='teacher_selected_course.php?id=". $row['course_id'] ."'>". $row['descriptive_title'] ."</a><br>";
                }
            }
        
        ?>



        <p><a href="server/logout.php">Log out</a></p>
  <!-- /content  --> 
</div>          
        <!-- .container  --> 

<!-- ============================ FOOTER  -->

  
<?php include('includes/footer.php'); ?>