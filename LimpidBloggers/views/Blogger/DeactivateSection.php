<?php
    $dErr = false;
    $errDMsg1 = "";
    $errDMsg2 = "";
    $errDMsg3 = "";

    if(!isset($_COOKIE['usertype']) || $_COOKIE['usertype'] != 3)
    {
        header("Location: http://localhost/LimpidBloggers/");
    }
    else
    {
        if(isset($_POST["deactivateBTN"]))
        {
            if(empty($_POST["deusernameTF"]))
            {
                $errDMsg1 .= "*";
                $dErr = true;
            }
            else
            {

            }
            if(empty($_POST["depassowrdPF"]) || strlen(trim($_POST["depassowrdPF"]))<1)
            {
                $errDMsg2 .= "*";
                $dErr = true;
            }
            else
            {

            }
            if(!isset($_POST["agreementCB"]))
            {
                $errDMsg3 .= "*";
                $dErr = true;
            }
            else
            {

            }
        }
    }
?>
<center>
    <div style="width: 30vw; padding-top: 5vh;">
        <fieldset>
            <legend><h2>Deactivate Account</h2></legend>
            <table>  
                <tr>
                    <td>Username:</td>
                    <td><input type="text" id="deusernameTF" name="deusernameTF"></td>
                    <td><span><font color="red"><?php echo $errDMsg1; ?></font></span></td>
                </tr>                     
                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="depassowrdPF" name="depassowrdPF"></td>
                    <td><span><font color="red"><?php echo $errDMsg2; ?></font></span></td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="checkbox" id="agreementCB" name="agreementCB" value="Agree">
                        <label for="agreementCB"> On change you have to login again. Agree?</label>
                        <span><font color="red"><?php echo $errDMsg3; ?></font></span>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <button type="submit" id="deactivateBTN" name="deactivateBTN">Request Deactivate</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
</center>