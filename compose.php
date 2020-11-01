<?php include('includes/header.php'); ?>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js" integrity="sha512-DZqqY3PiOvTP9HkjIWgjO6ouCbq+dxqWoJZ/Q+zPYNHmlnI2dQnbJ5bxAHpAMw+LXRm4D72EIRXzvcHQtE8/VQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <title>Compose Post</title>
    </head> 
<body> 
 <!-- CODE HERE   --> 
<div id="compose"> 
  <!-- content  -->  
  <button onclick="goBack()"><= Back </button>
 <p>Compose new post </p> 
 <p>{{ message }}</p> 
 
 <?php 
   if (isset($_SESSION['message'])) {
     echo $_SESSION['message'];
     unset($_SESSION['message']);
   }
 
 ?>


<form action="server/post.php" method="post" enctype="multipart/form-data">
 
 <br>
 <br>
 <input type="text" placeholder="Title" name="title">
    <br><br>
    <textarea placeholder="Description ..." name="description"></textarea>
    <input type="submit" name="btn_post" value="POST"> 
    <br>
    <input type="file" name="uploaded_file" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.txt,.pdf, video/*, image/*" ref="up_document"> 
  <!-- /content  -->  
  </form> 
        <!-- .container  --> 

<!-- ============================ FOOTER  --> 
<script>
   function goBack(){
      window.history.back();
   }

   var app = new Vue({
       el: '#compose',
       data: {
           message: "Hello World",
           selected: 'Anouncement'
       }
   });

</script>
  
<?php include('includes/footer.php'); ?>