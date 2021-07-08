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
        <title>LimpidBloggers | Manage Reported (Comments)</title>
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
                            <caption>Reported Blogs</caption>
                            <th>SL.</th>
                            <th>Blog Title</th>
                            <th>Comment</th>
                            <th>Report Count</th>
                            <th>Commented By</th>
                            <th>Reported By</th>
                            <th>Status</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dummy Blog 115545</td>
                                <td>Dummy Comment 1</td>
                                <td>5</td>
                                <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=1">Dummy User 1</a></td>
                                <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=2">Dummy User 2</a></td>
                                <td>Pending</td>
                                <td><a href="http://localhost/LimpidBloggers/views/Moderator/ActionReportedComment.php?BlogId=1&CommentId=1">Take Action</a></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Dummy Blog 216564</td>
                                <td>Dummy Comment 2</td>
                                <td>3</td>
                                <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=1">Dummy User 1</a></td>
                                <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=2">Dummy User 2</a></td>
                                <td>Pending</td>
                                <td><a href="http://localhost/LimpidBloggers/views/Moderator/ActionReportedComment.php?BlogId=1&CommentId=1">Take Action</a></td>
                            </tr>
                        </tbody>
                    </table>
                </center>
            </div>
        </form>
    </body>
</html>