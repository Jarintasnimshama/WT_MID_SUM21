<?php
    $errMsg = "";

    if(!isset($_COOKIE['usertype']) || $_COOKIE['usertype'] != 3)
    {
        header("Location: http://localhost/LimpidBloggers/");
    }
    else
    {
        if(isset($_POST["submitBTN"]))
        {
            if(empty($_POST["feedbackTB"]) || strlen(trim($_POST["feedbackTB"]))<1)
            {
                $errMsg .= "Some Feedback Text required.";
            }
            else
            {

            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <title>LimpidBloggers | Submit Feedback</title>
    </head>

    <body>
        <form method="post">
            <!-- Load Navbar -->
            <?php 
                include "navbar.php";
            ?> 

            <div align="center">
                <label>Write your feedback</label>
                <br>
                <textarea cols="50" rows="15" placeholder="write here.." id="feedbackTB" name="feedbackTB"></textarea>
                <br>
                <span><font color="red"><?php echo $errMsg; ?></font></span>
                <br>
                <button type="submit" name="submitBTN"  id="submitBTN">Submit Feedback</button>
            </div>
        </form>
    </body>
</html>