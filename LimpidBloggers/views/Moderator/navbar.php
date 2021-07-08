<?php
    if(!isset($_COOKIE['usertype']) || $_COOKIE['usertype'] != 2)
    {
        header("Location: http://localhost/LimpidBloggers/");
    }
    else
    {
        if(isset($_POST["logoutBTN"]))
        {
            setcookie("usertype",$_COOKIE["usertype"],time()-1800,"/");
            unset($_COOKIE["usertype"]);
            header("Location: http://localhost/LimpidBloggers/");
        }
    }
?>
<div>
    <center>
        <table border="1">
            <tr>
                <!-- Moderator -->
                <td><a href="http://localhost/LimpidBloggers/views/Moderator/ManageReportedComments.php">Reported Comments</a></td>
                <td><a href="http://localhost/LimpidBloggers/views/Moderator/ManageReportedBlogs.php">Reported Blogs</a></td>
                <!-- Common -->
                <td><a href="http://localhost/LimpidBloggers/views/Common/Blogs.php">Blogs</a></td>
                <td><a href="http://localhost/LimpidBloggers/views/Common/Community.php">Community</a></td>
                <td><a href="http://localhost/LimpidBloggers/views/Common/Announcements.php">Announcements</a></td>
                <td><a href="http://localhost/LimpidBloggers/views/Common/UserProfile.php">Profile</a></td>
                <td><a href="http://localhost/LimpidBloggers/views/Common/Setting.php">Settings</a></td>
                <td>
                    <button type="submit" name="logoutBTN" id="logoutBTN">Logout</button>
                </td>
            </tr>
        </table>
    </center>
</div>