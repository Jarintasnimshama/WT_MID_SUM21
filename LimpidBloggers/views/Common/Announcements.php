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
        <title>LimpidBloggers | Announcements</title>
    </head>

    <body>
        <form method="post">
            <!-- Load Navbar -->
            <?php 
                if($_COOKIE["usertype"] == 1)
                {
                    include "../Admin/navbar.php";
                    include "../Admin/PostAnnouncementsSection.php";
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

            <div align="center">
                <fieldset>
                    <legend><h3>xx-xx-xxxx dummy time</h3></legend>
                    <br>
                    Dummy Content
                    <br>
                </fieldset>
            </div>
        </form>
    </body>
</html>