<?php 
    function getFileArray(){
        $myfile = fopen("projects.txt", "r") or die("Unable to open file!");
        $line_one_string = fgets($myfile);
        $str_arr = explode ("|", $line_one_string);
        fclose($myfile);
        return $str_arr;
    }

    function getProjectsArray(){
        $pr_arr = explode (",", (getFileArray()[0]));
        return $pr_arr;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Projects Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a class="active" href="projects.php">Projects</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="social.php">Social</a></li>
                <li><a href="admin.html">Admin</a></li>
            </ul>
        </div>
        <div class="projects">
            <h1>PROJECTS</h1>
            <ol reversed type="I">
                <li><?php echo getProjectsArray()[count(getProjectsArray())-4]  ?>
                <p><?php echo getProjectsArray()[count(getProjectsArray())-3]  ?></p>
                </li>
                <li><?php echo getProjectsArray()[count(getProjectsArray())-2]  ?>
                <p><?php echo getProjectsArray()[count(getProjectsArray())-1]  ?></p>
                </li>
            </ol>
        </div>
    </body>
</html>
    