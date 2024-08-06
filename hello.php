<?php
    include_once 'header.php'
?>

    <section class="signup-form">
            <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<p> HELLO!". $_SESSION["useruid"] . "!</p>";
                    echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                }
            ?>
    </section>       

<?php
    include_once 'footer.php'
?>
