<!DOCTYPE html>
<html>
    <head>
        <title>Sign-up page</title>
    </head>
    <body>
        <?php include 'top.php' ?>
        <div id="content"> 
        <h1>User Registration</h1>
        <form action="succes_page.php" onsubmit="return signupUser()" method="post">
            <br>
            <label title="Two or more words, separated by whitespace.">Username</label>
            <br> 
            <br>
            <input type="text" name="username" id="username"/> 
            <br>  
            <br>
            <label title="Password must contain 8 or more chars. At least one lower case char. At least one upper case char. At least one number." for="password">Password</label>
            <br> 
            <br>
            <input type="password" name="password" id="password"/> 
            <br>
            <br>
            <label title="Passwords must be the same." for="password">Confirm password</label>
            <br> 
            <br>
            <input type="password" name="password" id="confirm_password"/> 
            <br>
            <br>
            <br>
            <br>
            <input type="submit" name="Submit" id="submit" value="Submit"/> 
            <br>
            <br>
            <input type="button" value="Go back" onclick="history.back()">
            <br><br>
        </form> 
        </div>
    </body>
</html>
