<?php include('includes/header.php'); ?>  
    <title>Welcome to SDSSU</title>
    </head> 
<body> 
 <!-- CODE HERE   --> 
<div class="container"> 
  <!-- content  --> 
        <h1>Welcome to <span><a href="index.php">SDSSU</a></span></h1>
        <h2>Learning Management System</h2>
        <?php 
            if(isset($_SESSION['error'])){
                echo $_SESSION['error'];
            } 
        ?>
        <h2>Teacher Log in</h2>
        <form action="server/teacher.php" method="post">
            <input type="email" placeholder="Email" name="email"> 
            <input type="password" placeholder="password" name="password">
            <input type="submit" value="Log in" name="btn_loginTeacher">
        </form>
  <!-- /content  --> 
</div>          
        <!-- .container  --> 

<!-- ============================ FOOTER  -->

  
<?php include('includes/footer.php'); ?>