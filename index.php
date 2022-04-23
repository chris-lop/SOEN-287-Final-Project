<?php 
    function getFileArray(){
        $myfile = fopen("index.txt", "r") or die("Unable to open file!");
        $line_one_string = fgets($myfile);
        $str_arr = explode ("|", $line_one_string);
        fclose($myfile);
        return $str_arr;
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <div class="navbar">
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="social.php">Social</a></li>
                <li><a href="admin.html">Admin</a></li>
            </ul>
        </div>
        <div class="self-portrait">
            <img src="img/profile.jpg" alt="Profile Picture" width="500" height="600">
        </div>
        <div class="professional-statement">
            <h1><?php echo 'Christopher Lopez' ?></h1>
            <p><?php echo getFileArray()[count(getFileArray())-3]  ?></p>
        </div>
        <div class="summary">
            <p><?php echo getFileArray()[count(getFileArray())-2] ?></p>
        </div>
    </body>
</html>