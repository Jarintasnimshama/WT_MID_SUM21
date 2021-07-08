<?php
    if(!isset($_COOKIE['usertype']) || $_COOKIE['usertype'] != 2)
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
        <title>LimpidBloggers | Manage Reports (Blogs)</title>
    </head>
    <body>
        <form method="post">
        <!-- Load Navbar -->
            <?php 
                include "navbar.php";
            ?> 
            <div>
                <center>
                    <table border="1">
                        <thead>
                            <caption>Reported Comments</caption>
                            <th>SL.</th>
                            <th>Blog Title</th>
                            <th>Report Count</th>
                            <th>Post By</th>
                            <th>Reported By</th>
                            <th>Status</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dummy Blog 115545</td>
                                <td>4</td>
                                <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=1">Dummy User 1</a></td>
                                <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=2">Dummy User 2</a></td>
                                <td>Pending</td>
                                <td><a href="http://localhost/LimpidBloggers/views/Moderator/ActionReportedBlog.php?BlogId=1">Take Action</a></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Dummy Blog 216564</td>
                                <td>8</td>
                                <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=1">Dummy User 1</a></td>
                                <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=2">Dummy User 2</a></td>
                                <td>Pending</td>
                                <td><a href="http://localhost/LimpidBloggers/views/Moderator/ActionReportedBlog.php?BlogId=1">Take Action</a></td>
                            </tr>
                        </tbody>
                    </table>
                </center>
            </div>
        </form>
    </body>
</html>