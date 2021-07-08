<?php
    $errMsg = "";

    if(isset($_POST["commentBTN"]))
    {
        if(empty($_POST["commentTB"]) || strlen(trim($_POST["commentTB"]))<1)
        {
            $errMsg .= "*";
        }
        else
        {

        }
    }
?>
<div align="center">
    <table>
        <tr>
            <td><input type="text" name="commentTB" id="commentTB" placeholder="Write Comment Here..."></td>
            <td><span><font color="red"><?php echo $errMsg; ?></font></span></td>
            <td><button type="submit" name="commentBTN" id="commentBTN">Add Comment</button></td>
        </tr>
    </table>
</div>