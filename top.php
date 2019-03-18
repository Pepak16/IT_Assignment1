<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'ViewController.php'; ?>
<div id="headertitle"><h1>Instakham Photos</h1></div>
<ul>
    <li><a href="index.php">Home</a></li>
    <?php 
        session_start();

        if ($_SESSION["logged_in"] == true) {
            
            echo "<li><a href=\"logout.php\">Logout</a></li>";
            //echo "<li>You are logged in as: $_SESSION[\"logged_in\"]</li>";
            // login menu is not showing, when the user is logged in
        } else {
            echo "<li><a href=\"login_page.php\">Login</a></li>";
            echo "<li><a href=\"register_page.php\">Signup</a></li>";
        }

      
    ?>
</ul>