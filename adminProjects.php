<!DOCTYPE html>
<html>
    <head>
        <title>Projects Page</title>
        <link rel="stylesheet" href="adminStyle.css">
        <script src="script.js"></script>
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="adminIndex.php">Home</a></li>
                <li><a href="adminResume.php">Resume</a></li>
                <li><a class="active" href="adminProjects.php">Projects</a></li>
                <li><a href="adminContact.html">Contact</a></li>
                <li><a href="adminSocial.php">Social</a></li>
                <li><a href="adminLogout.html">Logout</a></li>
            </ul>
        </div>
        <form id="projectform" action="./adminProjects.php" method="post">
            <label for="projects">My Projects</label><br>
            <textarea id="projects" name="projects" form="projectform">Project 1, Desc., Project 2, Desc.</textarea><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

<!--- 
<?php
    $projects = $_POST["projects"];

    $fp = fopen('projects.txt', 'c'); // Opens file in append mode
    fwrite($fp, sprintf('%s|', $projects));
    fclose($fp);
?>
--->
    