
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/skins/color-1.css">
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

            <!--=====MyCourses Section Start=====-->
            <section class="MyCourses section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>My Courses</h2>
                        </div>
                    </div>
                    <!--=====History part Start=====-->
                    <div class="row">
                        <div class="MyCourses-heading padd-15">
                            <h2>History</h2>
                        </div>
                        <div class="MyCourses-content padd-15">
                            <div class="row">
                                <!-- Add dynamic content for History here -->
                            </div>
                        </div>
                    </div>
                    <!--=====History part END=====-->
                    <!--=====Bookmarks part Start=====-->
                    <div class="row">
                        <div class="MyCourses-heading padd-15">
                            <h2>Bookmarks</h2>
                        </div>
                        <div class="MyCourses-content padd-15">
                            <div class="row">
                                <!-- Add dynamic content for Bookmarks here -->
                            </div>
                        </div>
                    </div>
                    <!--=====Bookmarks part END=====-->
                    <!--=====Recommendations part Start=====-->
                    <div class="row">
                        <div class="MyCourses-heading padd-15">
                            <h2>Recommendations</h2>
                        </div>
                        <div class="MyCourses-content padd-15">
                            <div class="row">
                                <!-- Add dynamic content for Recommendations here -->
                            </div>
                        </div>
                    </div>
                    <!--=====Recommendations part END=====-->
                </div>
            </section>
            <!--=====MyCourses Section END=====-->

            <!-- Include Footer -->
            <?php include("footer.php") ; ?>
        </div>
        <!--===Main content END===-->
    </div>
    <!--===Main container END===-->
    <!--===Js Files===-->
    <script src="../js/scripts.js"></script>
</body>
</html>