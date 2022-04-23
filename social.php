<?php 
    function getFileArray(){
        $myfile = fopen("social.txt", "r") or die("Unable to open file!");
        $line_one_string = fgets($myfile);
        $str_arr = explode ("|", $line_one_string);
        fclose($myfile);
        return $str_arr;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Social Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="resume.php">Resume</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a class="active" href="social.php">Social</a></li>
                <li><a href="admin.html">Admin</a></li>
            </ul>
        </div>
        <div class="social-media-icons">
            <img src="img/social_media_icons.jpg" alt="Social Media Icons" width="500" height="500" usemap="#social-media">
            <map name="social-media">
                <area shape="rect" coords="0,0,125,125" alt="Facebook" href="<?php echo getFileArray()[count(getFileArray())-4] ?>">
                <area shape="rect" coords="370,190,490,310" alt="LinkedIn" href="<?php echo getFileArray()[count(getFileArray())-3] ?>">
                <area shape="rect" coords="0,190,125,310" alt="Instagram" href="<?php echo getFileArray()[count(getFileArray())-2] ?>">
            </map>
        </div>
    </body>
</html>
    