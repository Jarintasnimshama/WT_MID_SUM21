<?php
    $nameErr = "";
    $mailErr = "";
    $dobErr = "";
    $mobileErr = "";
    $usernameErr = "";
    $passwordErr = "";
    $conpasswordErr = "";

    if(isset($_POST["registerBTN"]))
    {
        if(empty($_POST["nameTF"]) || strlen(trim($_POST["nameTF"])) < 1)
        {
            $nameErr .= "*";
        }
        else
        {

        }
        if(empty($_POST["emailTF"]) || strlen(trim($_POST["nameTF"])) < 1 || filter_var($_POST["nameTF"], FILTER_VALIDATE_EMAIL))
        {
            $mailErr .= "*";
        }
        else
        {
            
        }
        if($_POST["month"] == "" || $_POST["day"] == "" || $_POST["year"] == "")
        {
            $dobErr .= "*";
        }
        else
        {

        }
        if(empty($_POST["mobileTF"]) || strlen(trim($_POST["mobileTF"])) < 10 || !is_numeric(trim($_POST["mobileTF"])))
        {
            $mobileErr .= "*";
        }
        else
        {

        }
        if(empty($_POST["usernameTF"]) || strlen(trim($_POST["usernameTF"])) < 4)
        {
            $usernameErr .= "*";
        }
        else
        {

        }
        if(empty($_POST["passwordPF"]) || strlen(trim($_POST["passwordPF"])) < 4)
        {
            $passwordErr .= "*";
        }
        else
        {

        }
        if(empty($_POST["conpasswordPF"]) || strlen(trim($_POST["conpasswordPF"])) < 4 || $_POST["conpasswordPF"] != $_POST["passwordPF"])
        {
            $conpasswordErr .= "*";
        }
        else
        {

        }
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <title>LimpidBloggers | SignUp</title>
    </head>

    <body>
        <form method="POST">
            <center>
                <div style="width: 30vw; padding-top: 20vh;" bgcolor="red">
                    <fieldset>
                        <legend><h2>SignUp</h2></legend>
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" id="nameTF" name="nameTF"></td>
                                <td><?php echo $nameErr; ?></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><input type="email" id="emailTF" name="emailTF"></td>
                                <td><?php echo $mailErr; ?></td>
                            </tr>
                            <tr>
                                <td>D.O.B:</td>
                                <td>
                                    <select name="month" id="month">
                                        <option value="">Month</option>
                                        <option value="1">JAN</option>
                                        <option value="2">FEB</option>
                                        <option value="3">MAR</option>
                                    </select>
                                    <select name="day" id="day">
                                        <option value="">Day</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <select name="year" id="year">
                                        <option value="">Year</option>
                                        <option value="1">2021</option>
                                        <option value="2">2020</option>
                                        <option value="3">2019</option>
                                    </select>
                                </td>
                                <td><?php echo $dobErr; ?></td>
                            </tr>
                            <tr>
                                <td>Mobile No.:</td>
                                <td><input type="text" id="exmobileTF" name="mobileTF" value="+880" readonly style="width: 30px;"><input type="text" id="mobileTF" name="mobileTF" style="width: 118px;"></td>
                                <td><?php echo $mobileErr; ?></td>
                            </tr>
                            <tr>
                                <td>Username:</td>
                                <td><input type="text" id="usernameTF" name="usernameTF"></td>
                                <td><?php echo $usernameErr; ?></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" id="passwordPF" name="passwordPF"></td>
                                <td><?php echo $passwordErr; ?></td>
                            </tr>
                            <tr>
                                <td>Confirm Password:</td>
                                <td><input type="password" id="conpasswordPF" name="conpasswordPF"></td>
                                <td><?php echo $conpasswordErr; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" align="center"><button type="submit" id="registerBTN" name="registerBTN">Register</button></td>
                            </tr>
                            <tr>
                                <td colspan="3" align="center">Already have an account?<a href="http://localhost/LimpidBloggers/"> SignIn Here </a></td>
                            </tr>
                        </table>
                    </fieldset>
                </div>
            </center>
        </form>
    </body>
</html>