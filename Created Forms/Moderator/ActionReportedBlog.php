<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>
        <form method="post">
            <!-- Load Navbar -->
            <?php 
                include "navbar.php";
            ?> 

            <div align="center">
                <label>Dummy Post Title</label>
                <br>
                <label>Posted By: Dummy User 1</label>
                <br>
                <textarea cols="50" rows="15" readonly>
                    Blog text.......
                </textarea>
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
        </form>
    </body>
</html>