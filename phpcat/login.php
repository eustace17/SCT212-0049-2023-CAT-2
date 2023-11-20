<?php
    include_once 'header.php'
?>

<section>
    <h2>Log In</h2>
    <div class="login-form-form">
        <form action="includes/login.inc.php" method="POST">
            <input type="text" name="uid" placeholder="Enter your username/Email">
            <input type="password" name="pwd" placeholder="Enter your Password">
            <button type = "submit" name="submit">Log In</button>
        </form>
    </div>
    <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }

            else if($_GET["error"] == "wronglogin"){
                echo "<p>Incorrect login info!Check Your Password and Username and try again</p>";
            }
        }
    ?>
</section>

<?php
    include_once 'footer.php'
?>

