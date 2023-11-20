<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang = "en" dir = "Itr">
<head>
    <meta charset = "utf-8">
    <title>PHP CAT Login System</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <nav>
        <div class= "wrapper">
            <a href="index.php"><img src="img/Luffy.jpg" alt="Luffy Logo"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php
                    if(isset($_SESSION["useruid"])){
                        echo "<li><a href ='profile.php' >Profile Page</a></li>";
                        echo "<li><a href= 'includes/logout.inc.php' >Log Out</a></li>";

                    }        
                    else{
                        echo "<li><a href='signup.php'>Sign Up</a></li>";
                        echo "<li><a href='login.php'>Log In</a></li>";
                    }
                ?>
                
            </ul>
        </div>
    </nav>
    <div class = "wrapper-content">
        <!--CONTENT-->
  