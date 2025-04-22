<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Platform</title>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css?v=1.0">
    <link rel="stylesheet" href="../css/skins/color-1.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <div class="main-container">
        <?php include("navbar.php") ; ?> 
        <div class="main-content">
            <?php include("header.php"); ?> 
            <!--=== Home Section start ===-->
            
            <section class="home section">
                <div class="container">
                <div class="row">
                    <div class="home-info padd-15">
                        <h3 class="hello">Hello <span class="name">Administrator</span>, welcome to your platform</h3>
                        <p>
                            Here, you can add, delete, and update courses, manage users, and view your messages.
                        </p>
                        
                    </div>
                </div>

                    </div>
                </div>
            </section>
            <!--=== Home Section END ===-->
        </div>
        <?php include("footer.php") ; ?> 
    </div>
    <script src="../js/scripts.js?v=1.0"></script>
</body>
</html>
