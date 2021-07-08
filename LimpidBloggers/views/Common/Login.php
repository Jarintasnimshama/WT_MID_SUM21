<?php
    $username = "";
    $password = "";

    $errMsg = "";
    
    if(!isset($_COOKIE['usertype']))
    {
        if (isset($_POST['loginBTN'])) 
        {
            if($_POST["usernameTF"] == "1" && $_POST["passwordPF"] == "1")
            {
                setcookie("usertype","1",time()+1800,"/");
                header("Location: http://localhost/LimpidBloggers/views/Common/Blogs.php");
            }

            else if($_POST["usernameTF"] == "2" && $_POST["passwordPF"] == "2")
            {
                setcookie("usertype","2",time()+1800,"/");
                header("Location: http://localhost/LimpidBloggers/views/Common/Blogs.php");
            }

            else if($_POST["usernameTF"] == "3" && $_POST["passwordPF"] == "3")
            {
                setcookie("usertype","3",time()+1800,"/");
                header("Location: http://localhost/LimpidBloggers/views/Common/Blogs.php");
            }

            else
            {
                $errMsg = "Invalid Username/Password";
            }
        }
    }
    else
    {
        header("Location: http://localhost/LimpidBloggers/views/Common/Blogs.php");
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <title>LimpidBloggers | SignIn</title>
    </head>

    <body>
        <form method="POST">
            <center>
                <div style="width: 30vw; padding-top: 20vh;">
                    <fieldset>
                        <legend><h2>SignIn</h2></legend>
                        <table>
                            <tr>
                                <td>Username:</td>
                                <td><input type="text" id="usernameTF" name="usernameTF" required></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" id="passwordPF" name="passwordPF" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><font color="red"><?php echo $errMsg; ?></font></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">Forgot password?<a href="http://localhost/LimpidBloggers/views/Common/RetrivePassword.php"> Click here </a></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><button type="submit" id="loginBTN" name="loginBTN">Login</button></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">Don't have any account?<a href="http://localhost/LimpidBloggers/views/Common/Registration.php"> Register Here </a></td>
                            </tr>
                        </table>
                    </fieldset>
                </div>
            </center>
        </form>
    </body>
</html>