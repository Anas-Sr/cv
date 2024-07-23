<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cv style.css">
    <title>Cv Project</title>
</head>
<body>
<div class="container">
        <div class="left_side">
            <div class="profiletext">
                <div class="imgbox">
                    <img src="img/a.jpg" alt="خطأ في ظهور الصورة">
                </div>
<?php
        $FullName = $_GET['FullName'];
        $Specific = $_GET['Specific'];
        $PhoneNumber = $_GET['PhoneNumber'];
        $Email = $_GET['Email'];
        $Address = $_GET['Address'];
        $year1 = $_GET['year1'];
        $MaterialName = $_GET['MaterialName'];
        $NameOfUniversity = $_GET['NameOfUniversity'];
        $year2 = $_GET['year2'];
        $SecondMaterialName = $_GET['SecondMaterialName'];
        $SecondNameOfUniversity = $_GET['SecondNameOfUniversity'];
        $LevelOfEnglishlanguageSkills = $_GET['LevelOfEnglishlanguageSkills'];
        $LevelOfArabiclanguageSkills = $_GET['LevelOfArabiclanguageSkills'];
        $ProfileHistory = $_GET['ProfileHistory'];
        $wyear1 = $_GET['wyear1'];
        $wplace1 = $_GET['wplace1'];
        $SpecificProgramminglanguage = $_GET['SpecificProgramminglanguage'];
        $ProjectsOfProgrammingLanguage = $_GET['ProjectsOfProgrammingLanguage'];
        $wyear2 = $_GET['wyear2'];
        $wplace2 = $_GET['wplace2'];
        $SpecificProgramminglanguage2 = $_GET['SpecificProgramminglanguage2'];
        $ProjectsOfProgrammingLanguage2 = $_GET['ProjectsOfProgrammingLanguage2'];
        $HtmlLevel = $_GET['HtmlLevel'];
        $CssLevel = $_GET['CssLevel'];
        $JavaScriptLevel = $_GET['JavaScriptLevel'];
        $PhpLevel = $_GET['PhpLevel'];
        $MysqlLevel = $_GET['MysqlLevel'];
        ?>
            <h2><?php echo $FullName;?><br><span><?php echo $Specific;?></span></h2>
            </div>
            <div class="contactinfo">
                <h3 class="title">Contact Info</h3>
                <ul>
                    <li>
                        <span class="icon">📞</span>
                        <span class="text"><?php echo $PhoneNumber;?></span>
                    </li>
                    <li>
                        <span class="icon">📬</span>
                        <span class="text"><?php echo $Email;?></span>
                    </li>
                    <li>
                        <span class="icon">🏠</span>
                        <span class="text"><?php echo $Address;?></span>
                    </li>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti pariatur nihil libero dolor officiis sequi, natus tempora possimus eos inventore minima ad! Dolorem cumque ullam fugiat nulla ut. Adipisci, possimus.
                </ul>
            </div>
            
            <div class="contactinfo education">
                <h3 class="title">education</h3>
                <ul>
                    <li>
                        <h5><?php echo $year1;?></h5>
                        <h4><?php echo $MaterialName;?></h4>
                        <h4><?php echo $NameOfUniversity;?></h4>
                    </li>
                    <li>
                        <h5><?php echo $year2;?></h5>
                        <h4><?php echo $SecondMaterialName;?></h4>
                        <h4><?php echo $SecondNameOfUniversity;?></h4>
                    </li>
                </ul>
            </div>
            <div class="contactinfo language">
                <h3 class="title">language</h3>
                <ul>
                    <li>
                        <span class="text">English</span>
                        <span class="percent"><div style="width: <?php echo $LevelOfEnglishlanguageSkills;?>%;"></div></span>
                    </li>
                    <li>
                        <span class="text">Arabic</span>
                        <span class="percent"><div style="width: <?php echo $LevelOfArabiclanguageSkills;?>%;"></div></span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right_side">
            <div class="about">
                <h2 class="title2">Profile</h2>
                <p><?php echo $ProfileHistory;?></p>
            </div>
            <div class="about">
                <h2 class="title2">Experience</h2>
                <div class="box">
                    <div class="year-company">
                        <h5><?php echo $wyear1;?></h5>
                        <h5><?php echo $wplace1;?></h5>
                    </div>
                    <div class="text">
                        <h4><?php echo $SpecificProgramminglanguage;?></h4>
                        <p><?php echo $ProjectsOfProgrammingLanguage;?></p>
                    </div>
                </div>
                <div class="box">
                    <div class="year-company">
                        <h5><?php echo $wyear2;?></h5>
                        <h5><?php echo $wplace2;?></h5>
                    </div>
                    <div class="text">
                        <h4><?php echo $SpecificProgramminglanguage2;?></h4>
                        <p><?php echo $ProjectsOfProgrammingLanguage2;?></p>
                    </div>
                </div>
            </div>
            <div class="about skills">
                <h2 class="title2" style="margin-top: 150px;">Professional Skills</h2>
                <div class="box">
                    <h4>Html</h4>
                    <div class="percent">
                        <div style="width: <?php echo $HtmlLevel;?>%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>Css</h4>
                    <div class="percent">
                    <div style="width: <?php echo $CssLevel;?>%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>JavaScript</h4>
                    <div class="percent">
                    <div style="width: <?php echo $JavaScriptLevel?>%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>Php</h4>
                    <div class="percent">
                    <div style="width: <?php echo $PhpLevel?>%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>Mysql</h4>
                    <div class="percent">
                    <div style="width: <?php echo $MysqlLevel?>%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>