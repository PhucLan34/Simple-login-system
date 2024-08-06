<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset = "utf-8">
        <title>Login Form</title>
        <link rel="stylesheet" href="css/style.css">
    <head>

    <body>
        <nav>
            <div class="wrapper">
                <a href="index.php"><img src="img/mitina.png" alt="logo"></a>
                <ul class="links">
                    <?php
                        if (isset($_SESSION["useruid"])) {
                            echo "<li><a href='profile.php'>Profile</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
                        }
                        else{
                            echo "<li><a href='index.php'>Login</a></li>";
                            echo "<li><a href='signup.php'>Sign up</a></li>";
                        }
                    ?>
                </ul>
            </div>
        </nav>

    