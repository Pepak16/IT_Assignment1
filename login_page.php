<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
</head>
    <body>
        <?php include 'top.php'; 
                if (isset($_POST['submit'])) {
                    echo 'yessss';
                    //loginUser($_GET['username'],$_GET['password']);
                } else {
                    echo "<p>wrong user info</p>";
                }
            ?>
        <div id="content">
            <h1>Login</h1>
            <form action="login_succes_page.php" method="post" >
                <label title="Username">Username</label>
                <br>
                <br>
                <input type="text" name="username" id="username"/> 
                <br>  
                <br>
                <label title="Password" for="password">Password</label>
                <br>
                <br>
                <input type="password" name="password" id="password"/> 
                <br>
                <br>
                <br>
                <br>
                <input type="submit" name="submit" id="submit" value="submit"/> 
                <br>
                <br>
                <input type="button" value="Go back" onclick="history.back()">
            </form> 
            
        </div>
    </body>
</html>

<?php 
    
?>