<?php include('include/header.php'); ?> 
 
<title>Dashboard</title>
    </head> 
<body> 
 <!-- CODE HERE   --> 
<div class="container">

<a href="teacher.php"><= BACK</a> 
  <!-- content  --> 
  <form action="../server/admin.php" method="post">
    <input type="text" placeholder = "First Name" name="firstname" required>
    <input type="text" placeholder = "Middle Name" name="middlename">
    <input type="text" placeholder = "Last Name" name="lastname" required>
    <input type="text" placeholder = "email" name="email">
    <input type="password" placeholder= "Password" name="password"> 
    <input type="submit" value="Save" name="save_teacher"> 
  </form>
  <!-- /content  --> 
</div>          
        <!-- .container  --> 

<!-- ============================ FOOTER  -->

  
<?php include('include/footer.php'); ?>