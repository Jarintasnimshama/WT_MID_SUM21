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
        <title>LimpidBloggers | Report Comment</title>
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
                </fieldset>
                <table border="1">
                    <thead>
                        <caption>Report Comment</caption>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=1">Dummy User 1</a>: </td>
                            <td>Dummy Comment...</td>
                        </tr>
                    </tbody>
                </table>
                <label>Select Issue: </label>
                <select name="" id="">
                    <option value="0">Dummy Issue 1</option>
                    <option value="1">Dummy Issue 2</option>
                    <option value="2">Dummy Issue 3</option>
                </select>
                <br>
                <button type="submit">Submit Report</button>
            </div>
        </form>
    </body>
</html>