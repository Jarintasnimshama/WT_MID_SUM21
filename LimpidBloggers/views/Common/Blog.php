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
    <title>LimpidBloggers | Blog</title>
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
                    <a href="http://localhost/LimpidBloggers/views/Common/ReportBlog.php?BlogId=1">Report Blog</a>
                </fieldset>
                <?php 
                    if($_COOKIE["usertype"] == 3)
                    {
                        include "../Blogger/AddCommentBox.php";
                    }
                ?>
                <table border="1">
                    <thead>
                        <caption>All Comments</caption>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=1">Dummy User 1</a>:</td>
                            <td>Dummy Comment...</td>
                            <td><a href="#">Modify</a></td>
                            <td><a href="http://localhost/LimpidBloggers/views/Common/ReportComment.php?BlogId=1&CommentId=1">Report</a></td>
                        </tr>
                        <tr>
                            <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=2">Dummy User 2</a>:</td>
                            <td>Dummy Comment...</td>
                            <td><a href="#">Modify</a></td>
                            <td><a href="http://localhost/LimpidBloggers/views/Common/ReportComment.php?BlogId=1&CommentId=1">Report</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </body>
</html>