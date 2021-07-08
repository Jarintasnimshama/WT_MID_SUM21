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
        <title>LimpidBloggers | Blogger Profile</title>
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
                    <!-- <legend><h3>Dummy Blog Title </h3></legend> -->
                    <table>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td><img src="" alt="NO IMG FOUND"></td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>Name: </td>
                                        <td><label>Dummy Name</label><td>
                                    </tr>
                                    <tr>
                                        <td>Email: </td>
                                        <td><label>a!@a.com</label><td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </div>

            <div align="center">
                <fieldset>
                    <legend><h3>Dummy Blog Title </h3></legend>
                    <br>
                    <small>xx-xx-xxxx dummy time</small>
                    <div align="right">
                        <small align="right">By- Dummy User 1</small>
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