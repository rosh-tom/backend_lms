<?php include('include/header.php'); ?> 
<?php 
  require_once("../db/connection.php");
  $sqlQuery = "select firstname, lastname from tbl_admin where id = ". $_SESSION['id'];
  $result = $conn->query($sqlQuery);
  $row  = $result->fetch_assoc();
  $fname = $row['firstname'];
  $lname = $row['lastname']; 

?>
<title>Dashboard</title>
    </head> 
<body> 
 <!-- CODE HERE   --> 
<div class="container">
  <?php include('include/nav.php') ?>  <!-- Navigation -->
  <!-- content  -->
    <h1>Welcome <?= $fname ?> <?= $lname ?></h1>
  <!-- /content  --> 
</div>          
        <!-- .container  --> 

<!-- ============================ FOOTER  -->

  
<?php include('include/footer.php'); ?>