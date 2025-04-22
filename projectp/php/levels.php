<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levels</title>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css?v=1.0">
    <link rel="stylesheet" href="../css/skins/color-1.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <!--===Main container start===-->
    <div class="main-container">
        <!-- Include Navbar -->
        <?php include("navbar.php") ; ?>

        <!--===Main content start===-->
        <div class="main-content">
            <!-- Include Topbar -->
            <?php include("header.php"); ?>

            <!--=====Levels Section Start=====-->
            <section class="levels section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Levels</h2>
                        </div>
                    </div>
                    <div class="row">
                        <!--====Level 1====-->
                        <div class="level-item padd-15">
                            <a href="level1.php" class="level-link">
                                <div class="level-item-inner">
                                    <div class="icon">
                                        <i class="fas fa-folder-open"></i>
                                    </div>
                                    <h4>Level 1</h4>
                                    <p>Level 1 is designed for children aged 4 to 5 years old. It focuses primarily on language development and early education, helping them begin to express themselves and communicate effectively.</p>
                                </div>
                            </a>
                        </div>
                        
                        <!--====Level 2====-->
                        <div class="level-item padd-15">
                            <a href="level2.php" class="level-link">
                                <div class="level-item-inner">
                                    <div class="icon">
                                        <i class="fas fa-folder-open"></i>
                                    </div>
                                    <h4>Level 2</h4>
                                    <p>Level 2 corresponds to 1st grade and is designed to support students in their academic development.</p>
                                </div>
                            </a>
                        </div>
                        
                        <!--====Level 3====-->
                        <div class="level-item padd-15">
                            <a href="level3.php" class="level-link">
                                <div class="level-item-inner">
                                    <div class="icon">
                                        <i class="fas fa-folder-open"></i>
                                    </div>
                                    <h4>Level 3</h4>
                                    <p>Level 3 corresponds to 2nd grade and helps students strengthen their foundational knowledge in core subjects.</p>
                                </div>
                            </a>
                        </div>
                        
                        <!--====Level 4====-->
                        <div class="level-item padd-15">
                            <a href="level4.php" class="level-link">
                                <div class="level-item-inner">
                                    <div class="icon">
                                        <i class="fas fa-folder-open"></i>
                                    </div>
                                    <h4>Level 4</h4>
                                    <p>Level 4 corresponds to 3rd grade and focuses on building critical thinking and deeper understanding across disciplines.</p>
                                </div>
                            </a>
                        </div>
                        
                        <!--====Level 5====-->
                        <div class="level-item padd-15">
                            <a href="level5.php" class="level-link">
                                <div class="level-item-inner">
                                    <div class="icon">
                                        <i class="fas fa-folder-open"></i>
                                    </div>
                                    <h4>Level 5</h4>
                                    <p>Level 5 corresponds to 4th grade and aims to enhance students' problem-solving skills and subject mastery.</p>
                                </div>
                            </a>
                        </div>
                        
                        <!--====Level 6====-->
                        <div class="level-item padd-15">
                            <a href="level6.php" class="level-link">
                                <div class="level-item-inner">
                                    <div class="icon">
                                        <i class="fas fa-folder-open"></i>
                                    </div>
                                    <h4>Level 6</h4>
                                    <p>Level 6 corresponds to 5th grade and prepares learners for more advanced topics through interactive content and practice.</p>
                                </div>
                            </a>
                        </div>
                        
                        <!--====Level 7====-->
                        <div class="level-item padd-15">
                            <a href="level7.php" class="level-link">
                                <div class="level-item-inner">
                                    <div class="icon">
                                        <i class="fas fa-folder-open"></i>
                                    </div>
                                    <h4>Level 7</h4>
                                    <p>Level 7 corresponds to 6th grade and supports students as they transition toward middle school with a focus on independence and comprehension.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!--=====Levels Section END=====-->

            <!-- Include Footer -->
            <?php include("footer.php") ; ?>
        </div>
        <!--===Main content END===-->
    </div>
    <!--===Main container END===-->
    <!--===Js Files===-->
    <script src="../js/scripts.js?v=1.0"></script>
</body>
</html>