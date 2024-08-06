<?php
    include_once 'header.php'
?>

    <section class="signup-form">
        
        <h2>Login</h2>

        <form action="includes/index.inc.php" method="post">
            <div class="txt_field">
                <input type="text" name="uid" placeholder="Username/Email">
            </div>
            <div class="txt_field">
            <input type="password" name="pwd" placeholder="Password">
            </div>
            
            <div class="pass">
                <button type="submit" name="submit">Log in</button>
            </div>
            
        </form>
        
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput"){
                    echo "<p> Fill in all fields </p>";
                }
                else if ($_GET["error"] == "wronglogin"){
                    echo "<p>Incorrect information </p>";
                }
            }
        ?>
    </section>




<?php
    include_once 'footer.php'
?>
