<!DOCTYPE html>
<html>
    <head>
        <title>Social Page</title>
        <link rel="stylesheet" href="adminStyle.css">
        <script src="script.js"></script>
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="adminIndex.php">Home</a></li>
                <li><a href="adminResume.php">Resume</a></li>
                <li><a href="adminProjects.php">Projects</a></li>
                <li><a href="adminContact.html">Contact</a></li>
                <li><a class="active" href="adminSocial.php">Social</a></li>
                <li><a href="adminLogout.html">Logout</a></li>
            </ul>
        </div>
        <form id="socialform" action="./adminSocial.php" method="post">
            <label for="social1">Social Link 1</label><br>
            <input id="social1" name="social1" form="socialform"><br>
            <label for="social2">Social Link 2</label><br>
            <input id="social2" name="social2" form="socialform"><br>
            <label for="social3">Social Link 3</label><br>
            <input id="social3" name="social3" form="socialform"><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>


<!--- 
<?php
    $social1 = $_POST["social1"];
    $social2 = $_POST["social2"];
    $social3 = $_POST["social3"];

    $fp = fopen('social.txt', 'c'); // Opens file in append mode
    fwrite($fp, sprintf('%s|', $social1));
    fwrite($fp, sprintf('%s|', $social2));
    fwrite($fp, sprintf('%s|', $social3));
    fclose($fp);
?>
--->