<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>انشاء سيرة ذاتية جديدة</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registerstyle.css">
</head>
<body>
    <div class="container">
        <div class="title">Cv_Lancer</div>
            <form action="index.php">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">FullName <span style="color: red;">*</span></span>
                        <input type="text" name="FullName" placeholder="Enter Your Specific"  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Specific <span style="color: red;">*</span></span>
                        <input type="text"  name="Specific" placeholder="Enter Your Fullname"  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number<span style="color: red;">*</span></span>
                        <input type="tel" name="PhoneNumber" placeholder="It must be started +963"  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email<span style="color: red;">*</span></span>
                        <input type="email"  name="Email" placeholder="Enter Your Email"  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Address<span style="color: red;">*</span></span>
                        <input type="text" name="Address" placeholder="Enter Your Address"  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Year-begin / year-end<span style="color: red;">*</span></span>
                        <input type="text" name="year1" placeholder="Such as 2000 - 2010"  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Material Name<span style="color: red;">*</span></span>
                        <input type="text" name="MaterialName" placeholder="Such as Mathmatic"  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Name Of University<span style="color: red;">*</span></span>
                        <input type="text" name="NameOfUniversity" placeholder="Such as Damascus University"  required>
                    </div>

                    <!--  -->
                    <div class="input-box">
                        <span class="details">Year-begin / year-end</span>
                        <input type="text" name="year2" placeholder="Such as 2000 - 2010">
                    </div>
                    <div class="input-box">
                        <span class="details">Second Material Name</span>
                        <input type="text" name="SecondMaterialName" placeholder="Such as Mathmatic">
                    </div>
                    <div class="input-box">
                        <span class="details">Second Name Of University</span>
                        <input type="text" name="SecondNameOfUniversity" placeholder="Such as Damascus University">
                    </div>

                    <!--  -->
                    <div class="input-box">
                        <span class="details">Level Of English language Skills<span style="color: red;">*</span></span>
                        <input type="number" name="LevelOfEnglishlanguageSkills"   min = "15" max = "95" placeholder="Enter Number Betwwen 15 - 95 " required>
                    </div>
                    <div class="input-box">
                        <span class="details">Level Of Arabic language Skills<span style="color: red;">*</span></span>
                        <input type="number" name="LevelOfArabiclanguageSkills"  min = "15" max = "95" placeholder="Enter Number Betwwen 15 - 95 " required>
                    </div>
                    <!--  -->

                    <div class="input-box">
                        <span class="details">Profile History<span style="color: red;">*</span></span>
                        <textarea  name="ProfileHistory" placeholder="60 words MAX"   required></textarea>
                    </div>

                    <!--  -->
                    <div class="input-box">
                        <span class="details">Work Start Year - Work End Year<span style="color: red;">*</span></span>
                        <input type="text" name="wyear1" placeholder="Such as 2000 - 2010"   required>
                    </div>
                    <div class="input-box">
                        <span class="details">Work Place Name<span style="color: red;">*</span></span>
                        <input type="text" name="wplace1" placeholder="Enter Your Work Place Name"  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Specific Programming language<span style="color: red;">*</span></span>
                        <input type="text" name="SpecificProgramminglanguage" placeholder="Enter Your Specific Programming language"  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Projects Of Programming Language<span style="color: red;">*</span></span>
                        <textarea  name="ProjectsOfProgrammingLanguage" placeholder="60 words MAX"  required></textarea>
                    </div>
                    <!--  -->
                    
                    <!--  -->
                    <div class="input-box">
                        <span class="details">Work Start Year - Work End Year</span>
                        <input type="text" name="wyear2" placeholder="Such as 2000 - 2010">
                    </div>
                    <div class="input-box">
                        <span class="details">Work Place Name</span>
                        <input type="text" name="wplace2" placeholder="Enter Your Work Place Name">
                    </div>
                    <div class="input-box">
                        <span class="details">Specific Programming language</span>
                        <input type="text" name="SpecificProgramminglanguage2" placeholder="Enter Your Specific Programming language">
                    </div>
                    <div class="input-box">
                        <span class="details">Projects Of Programming Language</span>
                        <textarea  name="ProjectsOfProgrammingLanguage2" placeholder="60 words MAX"></textarea>
                    </div>
                    <!--  -->
                    <div class="input-box">
                        <span class="details">Html Level<span style="color: red;">*</span></span>
                        <input type="number" name="HtmlLevel" min = "15" max = "95" placeholder="Enter Number Betwwen 15 - 95"  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Css Level<span style="color: red;">*</span></span>
                        <input type="number" name="CssLevel" min = "15" max = "95" placeholder="Enter Number Betwwen 15 - 95 "  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Java Script Level<span style="color: red;">*</span></span>
                        <input type="number" name="JavaScriptLevel" min = "15" max = "95" placeholder="Enter Number Betwwen 15 - 95"  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Php Level<span style="color: red;">*</span></span>
                        <input type="number" name="PhpLevel" min = "15" max = "95" placeholder="Enter Number Betwwen 15 - 95 "  required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mysql Level<span style="color: red;">*</span></span>
                        <input type="number" name="MysqlLevel" min = "15" max = "95" placeholder="Enter Number Betwwen 15 - 95 "  required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Create">
                </div>
            </form>
    </div>
            <!-- <script>
                const textarea = document.querySelector("textarea");
                const nowheight = parseInt(ComputedStyle(textarea).PropertyValue('height'));
                textarea.addEventListener("keyup", e =>{
                    textarea.style.height = '${nowheight}px';
                    const newheight = textarea.scrollHeight - nowheight;
                    textarea.style.height = '${newheight}px';
                });
            </script> -->
</body>
</html>