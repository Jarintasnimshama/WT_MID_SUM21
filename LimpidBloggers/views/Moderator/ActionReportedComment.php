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
        <title>LimpidBloggers | Take Action (Comments)</title>
    </head>

    <body>
        <form method="post">
            <!-- Load Navbar -->
            <?php 
                include "navbar.php";
            ?> 

            <div style="width: 65vw; float:left;" align="center">
                <label>Dummy Post Title</label>
                <br>
                <label>Posted By: <a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=1">Dummy User 1</a></label>
                <br>
                <textarea cols="50" rows="15" readonly>
                    Blog text.......
                </textarea>
                <br>
                <label>Reported Comment</label>
                <br>
                <label><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=1">Dummy User 1</a>: </label><input type="text" value="Dummy Comment" readonly>
                <br>
                <label>Current Action: Pending</label>
                <br>
                <label>Select Action: </label>
                <select name="" id="">
                    <option value="0">Pending</option>
                    <option value="1">Reject Report</option>
                    <option value="2">Offensive</option>
                </select>
                <br>
                <button type="submit">Submit Action</button>
            </div>
            <div style="width: 30vw; float:right; overflow:scroll; max-height: 95vh">
                <table border="1" style="width: calc(100%);">
                    <thead>
                        <th>SL</th>
                        <th>Reported By</th>
                        <th>Issue</th>
                        <th>Reported Time</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dummy User</td>
                            <td>Dummy Issue</td>
                            <td>00-00-00000 Dummy Time</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dummy User</td>
                            <td>Dummy Issue</td>
                            <td>00-00-00000 Dummy Time</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Dummy User</td>
                            <td>Dummy Issue</td>
                            <td>00-00-00000 Dummy Time</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Dummy User</td>
                            <td>Dummy Issue</td>
                            <td>00-00-00000 Dummy Time</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </body>
</html>