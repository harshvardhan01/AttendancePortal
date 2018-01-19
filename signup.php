<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/form.css">
        <style>
            #sub, #subabbr
            {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 15px;
            }
        </style>
    </head>
    
    <body>
        <form method="post" action="getSignUp.php">
            <table align="center" cellpadding="10px">
                <tr>
                    <td>Enter Name</td>
                    <td><input type="text" name="aname" required></td>
                </tr>
                <tr>
                    <td>Enter Phone</td>
                    <td><input type="text" name="aphone" required></td>
                </tr>
                <tr>
                    <td>Enter Email</td>
                    <td><input type="email" name="aemail" required></td>
                </tr>
                <tr>
                    <td>Enter Password</td>
                    <td><input type="password" name="apassword" required></td>
                </tr>
                <tr>
                    <td>Select Category</td>
                    <td>
                        <select name="acategory" required>
                            <option value="">--Select--</option>
                            <option value="Co-ordinator">Co-ordinator</option>
                            <option value="Faculty">Faculty</option>
                            <option value="Student">Student</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="Sign Up"></td>
                </tr>
            </table>
        </form>
        <a href="login.php">Login</a>
    </body>
</html>