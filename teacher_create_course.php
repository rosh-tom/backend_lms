<?php include('includes/header.php'); ?>  
 
    <title>Teacher Create Courses</title>
    </head> 
<body> 
 <!-- CODE HERE   --> 
<div class="container"> 
  <!-- content  --> 
        <p>  <span><a href="dashboard_teacher.php"><= Back </a></span></p>  
        <form action="server/teacher.php" method="post">
            <input type="text" placeholder="Course Number" name="course_no">
            <input type="text" placeholder="Section" name="section">
            <textarea rows="4" cols="50" placeholder="Descriptive Title" name="title"></textarea>
            <input type="submit" value="Add Course" name="btn_addCourse">
        </form>
 
  <!-- /content  --> 
</div>          
        <!-- .container  --> 

<!-- ============================ FOOTER  -->

  
<?php include('includes/footer.php'); ?>