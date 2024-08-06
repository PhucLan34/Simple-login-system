<?php
    include_once 'header.php'
?>

    <section class="signup-form">
        <h2>Sign up</h2>
        <form action="includes/signup.inc.php" method="post">
        <div class="txt_field">
            <input type="text" name="name" placeholder="Full name">
        </div>
        <div class="txt_field">
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="txt_field">
            <input type="text" name="uid" placeholder="Username">
        </div>
        <div class="txt_field">
            <input type="password" name="pwd" placeholder="Password">
        </div>
        <div class="txt_field">
            <input type="password" name="pwdrepeat" placeholder="Repeat Passowrd">
        </div>
        <div class="pass">
            <button type="submit" name="submit">Sign up</button>
        </div>
        </form>
        
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput"){
                    echo "<p> Fill in all fields </p>";
                }
                else if ($_GET["error"] == "invaliduid"){
                    echo "<p>Invalid username </p>";
                }
                else if ($_GET["error"] == "invalidemail"){
                    echo "<p> Email incorrect </p>";
                }
                else if ($_GET["error"] == "passwordsdontmatch"){
                    echo "<p> Password doesn't match </p>";
                }
                else if ($_GET["error"] == "stmtfailed"){
                    echo "<p>Something to went wrong! Try again. </p>";
                }
                else if ($_GET["error"] == "usernametaken"){
                    echo "<p>Username taken</p>";
                }
                else if ($_GET["error"] == "none"){
                    echo "<p>Successfully Sign up</p>";
                }
            }
        ?>
    </section>

<?php
    include_once 'footer.php'
?>