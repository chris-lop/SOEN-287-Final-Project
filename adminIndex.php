<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="adminStyle.css">
        <script src="script.js"></script>
    </head>
    
    <body>
        <div class="navbar">
            <ul>
                <li><a class="active" href="adminIndex.php">Home</a></li>
                <li><a href="adminResume.php">Resume</a></li>
                <li><a href="adminProjects.php">Projects</a></li>
                <li><a href="adminContact.html">Contact</a></li>
                <li><a href="adminSocial.php">Social</a></li>
                <li><a href="adminLogout.html">Logout</a></li>
            </ul>
        </div>
        <form id="indexform" action="./adminIndex.php" method="post">
            <label for="profStatement">Professional Statement</label><br>
            <textarea id="profStatement" name="profStatement" form="indexform"></textarea><br>
            <label for="bio">Brief Biography</label><br>
            <textarea id="bio" name="bio" form="indexform"></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

<!--- 
<?php
    $profStatement = $_POST["profStatement"];
    $bio = $_POST["bio"];
    $fp = fopen('index.txt', 'a'); // Opens file in append mode
    fwrite($fp, sprintf('%s|', $profStatement));
    fwrite($fp, sprintf('%s|', $bio));
    fclose($fp);
?>
--->