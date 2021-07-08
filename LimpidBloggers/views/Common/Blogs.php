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
        <title>LimpidBloggers | Blogs</title>
    </head>

    <body>
        <form method="post">
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
                    include "../Blogger/PostBlogSection.php";
                }
            ?> 

            <div align="center">
                <fieldset>
                    <legend><h3>Dummy Blog Title </h3></legend>
                    <br>
                    <small>xx-xx-xxxx dummy time</small>
                    <div align="right">
                        <small align="right"><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=1">By- Dummy User 1</a></small>
                    </div>
                    <br>
                    Dummy Blog Content
                    <br>
                    <a href="http://localhost/LimpidBloggers/views/Common/Blog.php?blogID=1">Load Blog</a>
                </fieldset>
            </div>
        </form>
    </body>
</html>