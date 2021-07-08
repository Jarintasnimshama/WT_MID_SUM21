<?php
    $errMsg = "";

    if(isset($_POST["postBTN"]))
        {
            if(empty($_POST["blogTB"]) || strlen(trim($_POST["blogTB"]))<1)
            {
                $errMsg .= "Some Feedback Text required.";
            }
            else
            {

            }
        }
?>
<div align="center">
    <textarea cols="150" rows="8" placeholder="Write your post.." name="blogTB" id="blogTB"></textarea>
    <br>
    <span><font color="red"><?php echo $errMsg; ?></font></span>
    <br>
    <button type="submit" name="postBTN" id="postBTN">Post</button>
</div>