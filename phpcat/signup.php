<?php
    include_once 'header.php'
?>

    <section>
        <h2>Sign Up</h2>
        <div class="signup-form-form">
            <form action="includes/signup.inc.php" method="POST">
                <input type="text" name="name" placeholder="Enter your Full Name">
                <input type="text" name="email" placeholder="Enter your Email">
                <input type="text" name="uid" placeholder="Enter your UserName">
                <input type="password" name="pwd" placeholder="Enter your Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat your Password">
                <button type = "submit" name="submit">Sign Up</button>
            </form>
        </div>
        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p>Fill in all fields!</p>";
            }

            else if($_GET["error"] == "invaliduid"){
                echo "<p>Choose a proper username!</p>";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<p>Choose a proper email!</p>";
            }
            else if($_GET["error"] == "passwordsdontmatch"){
                echo "<p>Passwords Do not match!</p>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong Try Again!</p>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<p>Username Already In Use!</p>";
            }
            else if($_GET["error"] == "none"){
                echo "<p>You have successfuly signed up! Please Proceed to Log In</p>";
            }
        }
    ?>
    </section>

   



<?php
    include_once 'footer.php'
?>

