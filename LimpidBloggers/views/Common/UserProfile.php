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
        <title>LimpidBloggers | My Profile</title>
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
                }
            ?> 
            <center>
                <div style="width: 30vw; padding-top: 20vh;">
                    <fieldset>
                        <legend><h2>User Profile</h2></legend>
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" id="nameTF" name="nameTF" required readonly></td>
                            </tr>
                            <tr>
                                <td>Username:</td>
                                <td><input type="text" id="usernameTF" name="usernameTF" required readonly></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><input type="email" id="emailTF" name="emailTF" required readonly></td>
                            </tr>
                            <tr>
                                <td>D.O.B:</td>
                                <td>
                                    <select name="month" id="month" disabled>
                                        <option value="">Month</option>
                                        <option value="1">JAN</option>
                                        <option value="2">FEB</option>
                                        <option value="3">MAR</option>
                                    </select>
                                    <select name="day" id="day" disabled>
                                        <option value="">Day</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <select name="year" id="year" disabled>
                                        <option value="">Year</option>
                                        <option value="1">2021</option>
                                        <option value="2">2020</option>
                                        <option value="3">2019</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Mobile No.:</td>
                                <td><input type="text" id="mobileTF" name="mobileTF" required readonly></td>
                            </tr>
                            
                            <tr>
                                <td colspan="2" align="center">
                                    <button type="button" id="requesteditBTN" name="requesteditBTN">Edit Profile</button>
                                    <button type="button" id="proceededitBTN" name="proceededitBTN" hidden>Confirm Edit</button>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </div>
            </center>
        </form>
    </body>
</html>