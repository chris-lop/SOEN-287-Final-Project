<!DOCTYPE html>
<html>
    <head>
        <title>Resume Page</title>
        <link rel="stylesheet" href="adminStyle.css">
        <script src="script.js"></script>
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="adminIndex.php">Home</a></li>
                <li><a class="active" href="adminResume.php">Resume</a></li>
                <li><a href="adminProjects.php">Projects</a></li>
                <li><a href="adminContact.html">Contact</a></li>
                <li><a href="adminSocial.php">Social</a></li>
                <li><a href="adminLogout.html">Logout</a></li>
            </ul>
        </div>
        <form id="resumeform" action="./adminResume.php" method="post">
            <label for="eduQual">Educational Qualifications</label><br>
            <textarea id="eduQual" name="eduQual" form="resumeform">School name, description, ...</textarea><br>
            <label for="skills">Skill Set</label><br>
            <textarea id="skills" name="skills" form="resumeform">Skill name, description, ...</textarea><br>
            <label for="awards">Awards/Recognition</label><br>
            <textarea id="awards" name="awards" form="resumeform">Award 1, Award 2, Award 3, ...</textarea><br>
            <label for="experience">Work Experience</label><br>
            <textarea id="experience" name="experience" form="resumeform">Experience 1, Description, Experience 2, Description, ...</textarea><br>
            <label for="referees">Referees</label><br>
            <textarea id="referees" name="referees" form="resumeform">Reference 1, Description, Reference 2, Description, ...</textarea><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

<!--- 
<?php
    $eduQual = $_POST["eduQual"];
    $skills = $_POST["skills"];
    $awards = $_POST["awards"];
    $experience = $_POST["experience"];
    $referees = $_POST["referees"];


    $fp = fopen('resume.txt', 'c'); // Opens file in append mode
    fwrite($fp, sprintf('%s|', $eduQual));
    fwrite($fp, sprintf('%s|', $skills));
    fwrite($fp, sprintf('%s|', $awards));
    fwrite($fp, sprintf('%s|', $experience));
    fwrite($fp, sprintf('%s|', $referees));
    fclose($fp);
?>
--->
    