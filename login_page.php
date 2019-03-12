<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
    <script src="scripts/auth_script.js"></script>
</head>
    <body>
        <?php include 'top.php'; ?>
        <div id="content">
            <h1>Login</h1>
            <form action="succes_page.php" onsubmit="return loginUser()" method="post" >
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
                <input type="submit" name="Submit" id="submit" value="Submit"/> 
                <br>
                <br>
                <input type="button" value="Go back" onclick="history.back()">
            </form> 
        </div>
    </body>
</html>

