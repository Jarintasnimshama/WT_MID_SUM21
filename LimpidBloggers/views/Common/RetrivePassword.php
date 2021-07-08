<!DOCTYPE html>

<html>
    <head>
        <title>LimpidBloggers | Forgot Password</title>
    </head>

    <body>
        <form method="POST">
            <center>
                <div style="width: 30vw; padding-top: 20vh;" bgcolor="red">
                    <fieldset>
                        <legend><h2>Reset Password</h2></legend>
                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" id="nameTF" name="nameTF" required></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><input type="email" id="emailTF" name="emailTF" required></td>
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
                            </tr>
                            <tr>
                                <td>Mobile No.:</td>
                                <td><input type="text" id="mobileTF" name="mobileTF" required></td>
                            </tr>
                            <tr>
                                <td>Username:</td>
                                <td><input type="text" id="usernameTF" name="usernameTF" required></td>
                            </tr>
                            <tr>
                                <td>New Password:</td>
                                <td><input type="password" id="passwordPF" name="passwordPF" required></td>
                            </tr>
                            <tr>
                                <td>Confirm Password:</td>
                                <td><input type="password" id="conpasswordPF" name="conpasswordPF" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><button type="submit" id="retriveBTN" name="retriveBTN">Request Password Change</button></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><a href="http://localhost/LimpidBloggers/"> Back to SignIn </a></td>
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