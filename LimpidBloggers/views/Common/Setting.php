<?php
    if(!isset($_COOKIE['usertype']))
    {
        header("Location: http://localhost/LimpidBloggers/");
    }
    else
    {
        
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>LimpidBloggers | Settings</title>
    </head>

    <body>
        <form method="POST">
            <!-- Load Navbar -->
            <?php 
                if($_COOKIE["usertype"] == 1)
                {
                    include "../Admin/navbar.php";
                }
                if($_COOKIE["usertype"] == 2)
                {
                    include "../Moderator/navbar.php";
                }
                if($_COOKIE["usertype"] == 3)
                {
                    include "../Blogger/navbar.php";
                    include "../Blogger/DeactivateSection.php";
                }
            ?> 
            <center>
                <div style="width: 30vw; padding-top: 20vh;">
                    <fieldset>
                        <legend><h2>Change Password</h2></legend>
                        <table>                       
                            <tr>
                                <td>Old Password:</td>
                                <td><input type="text" id="passowrdPF" name="passowrdPF"></td>
                            </tr>
                            <tr>
                                <td>New Password:</td>
                                <td><input type="text" id="newpassowrdPF" name="newpassowrdPF"></td>
                            </tr>
                            <tr>
                                <td>Confirm Password:</td>
                                <td><input type="text" id="conpassowrdPF" name="conpassowrdPF"></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <button type="submit" id="changepasswordBTN" name="changepasswordBTN">Request Change</button>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </div>
            </center>
        </form>
    </body>
</html>