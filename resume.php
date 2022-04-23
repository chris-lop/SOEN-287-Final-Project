<?php 
    function getFileArray(){
        $myfile = fopen("resume.txt", "r") or die("Unable to open file!");
        $line_one_string = fgets($myfile);
        $str_arr = explode ("|", $line_one_string);
        fclose($myfile);
        return $str_arr;
    }

    function getEducationArray(){
        $edu_arr = explode (",", (getFileArray()[0]));
        return $edu_arr;
    }

    function getSkillsArray(){
        $skills_arr = explode (",", (getFileArray()[1]));
        return $skills_arr;
    }

    function getAwardsArray(){
        $aw_arr = explode (",", (getFileArray()[2]));
        return $aw_arr;
    }

    function getExpArray(){
        $exp_arr = explode (",", (getFileArray()[3]));
        return $exp_arr;
    }

    function getRefArray(){
        $ref_arr = explode (",", (getFileArray()[4]));
        return $ref_arr;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Resume Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="resume.php">Resume</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="social.php">Social</a></li>
                <li><a href="admin.html">Admin</a></li>
            </ul>
        </div>
        <div class="education">
            <h1>EDUCATION</h1>
            <dl>
                <dt><?php echo getEducationArray()[count(getEducationArray())-2]  ?></dt>
                <dd><?php echo getEducationArray()[count(getEducationArray())-1]  ?></dd>
            </dl>
        </div>
        <div class="skills">
            <h1>SKILLS</h1>
            <dl>
                <dt><?php echo getSkillsArray()[count(getSkillsArray())-2]  ?></dt>
                <dd><?php echo getSkillsArray()[count(getSkillsArray())-1]  ?></dd>
            </dl>
        </div>
        <div class="awards">
            <h1>AWARDS & RECOGNITION</h1>
            <ol>
                <li><?php echo getAwardsArray()[count(getAwardsArray())-3]  ?></li>
                <li><?php echo getAwardsArray()[count(getAwardsArray())-2]  ?></li>
                <li><?php echo getAwardsArray()[count(getAwardsArray())-1]  ?></li>
            </ol>
        </div>
        <div class="experience">
            <h1>EXPERIENCE</h1>
            <ol>
                <li><?php echo getExpArray()[count(getExpArray())-4]  ?>
                <ul>
                    <li><?php echo getExpArray()[count(getExpArray())-3]  ?></li>
                </ul>
                </li>
                <li><?php echo getExpArray()[count(getExpArray())-2]  ?>
                <ul>
                    <li><?php echo getExpArray()[count(getExpArray())-1]  ?></li>
                </ul>
                </li>
            </ol>
        </div>
        <div class="references">
            <h1>REFERENCES</h1>
            <ul>
                <li><?php echo getRefArray()[count(getRefArray())-4]  ?>
                <ul>
                    <li><?php echo getRefArray()[count(getRefArray())-3]  ?></li>
                </ul>
                </li>
                <li><?php echo getRefArray()[count(getRefArray())-2]  ?>
                <ul>
                    <li><?php echo getRefArray()[count(getRefArray())-1]  ?></li>
                </ul>
                </li>
            </ul>
        </div>
        <div class="download-cv">
            <button href=".\file\Christopher-Lopez-CV.pdf" download="Christopher-Lopez-CV.pdf" type="button">Download Full CV</button>
        </div>
    </body>
</html>
    