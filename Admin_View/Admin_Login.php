<?php

include("../Admin_control/Admin_login_Validation.php");
?>

<html>
    <title>Admin Login </title>
    <body>
       
        <h1>Admin Login Page</h1>

        <form action=""method="POST"  enctype="multipart/form-data">
            <fieldset>
                <legend>Login Details:</legend>
            <table>
                <tr>
                    <td>Admin name</td>
                    <td><input type="text" name="admin_name" placeholder="Enter your Username"></td>
                    <?php echo $invalid_adminname; ?>
</tr>
<tr>
                    <td>Password</td>
                    <td><input type="password" name="admin_pass" placeholder="Enter your Password"></td>
                    <?php echo $invalid_password; ?>
</tr>
<tr>
                    <td> <input type="submit" name="Submission" value="Login"></td>
                </tr>
                <tr>
                    <td>
                        <a href="Admin_Forget_Pass.php">Forget Password</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Contact Me: 01615972128
                    </td>
                    <td>
                        <a href="https://github.com/Rayied991">
                            <img src="../images/github.png" alt="Github"  width="50" height="50" >
                        </a>
                    </td>
                </tr>
            </table>
            
        </form>
        </fieldset>
        <h4>Don't Have an Account, <a href="Admin_Registration.php"> Register here</a></h4>
    </body>
</html>