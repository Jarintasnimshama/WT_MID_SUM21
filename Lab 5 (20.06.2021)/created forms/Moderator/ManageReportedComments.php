<!DOCTYPE html>
<html>
    <head>
        <title>LimpidBloggers | Manage Reported Blogs</title>
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
                                <td>Dummy User 1</td>
                                <td>Dummy User 2</td>
                                <td>Pending</td>
                                <td><a href="ActionReportedComment.php">Take Action</a></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Dummy Blog 216564</td>
                                <td>Dummy Comment 2</td>
                                <td>3</td>
                                <td>Dummy User 1</td>
                                <td>Dummy User 2</td>
                                <td>Pending</td>
                                <td><a href="ActionReportedComment.php">Take Action</a></td>
                            </tr>
                        </tbody>
                    </table>
                </center>
            </div>
        </form>
    </body>
</html>