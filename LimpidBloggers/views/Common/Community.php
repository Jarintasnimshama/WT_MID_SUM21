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
        <title>LimpidBloggers | Community</title>
    </head>

    <body>
        <form method="POST">
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
            <center>
                <div style="width: 70vw;">
                    <fieldset>
                        <legend><h2>Bloggers List</h2></legend>
                        <table>
                            <thead>
                                <th>SL</th>
                                <th>Name</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dummy Blogger 1</td>
                                    <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=1">View Profile</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dummy Blogger 2</td>
                                    <td><a href="http://localhost/LimpidBloggers/views/Blogger/BloggerProfile.php?ID=2">View Profile</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </fieldset>
                </div>
            </center>
        </form>
    </body>
</html>