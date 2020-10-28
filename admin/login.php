<?php include('include/header.php'); ?> 
<title>Title</title>
    </head> 
<body> 
 <!-- CODE HERE   -->
    <div id="dashboard">
        <div class="container">
         
            <!-- CODE HERE....  --> 
        
            <p>
                <?php 
                    if (isset($_SESSION['message']['success'])) {
                        echo $_SESSION['message']['success']; 
                    }
                    if (isset($_SESSION['message']['error'])) {
                        echo $_SESSION['message']['error']; 
                    } 
                ?>
            </p>

            <form action="../server/admin.php" method="post">
                <input 
                    type="email" 
                    name="email"
                    placeholder="Email"
                    required
                    value=
                        <?php 
                            if(isset($_SESSION['message']['email'])){
                                echo "'". $_SESSION['message']['email'] ."'";
                            }else{
                                echo "''" . 'autofocus';
                            }
                        ?> 
                    /> 
                <input 
                    type="password" 
                    placeholder="Password" 
                    name="password"
                    required
                    <?php 
                        if(isset($_SESSION['message']['email'])){
                                echo ' autofocus'; 
                         }
                    ?>

                />

                <input type="submit" value="Log in" name="login">
            </form>

        </div>          
        <!-- .container  --> 
    </div> 
<!-- ============================ FOOTER  -->
<script>
  
<?php unset($_SESSION['message']); ?>
<?php include('inc/footer.php'); ?>