<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Platform</title>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skins/color-1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <div class="main-container">
        @include("navbar") 
        <!--===Main content start===-->
        <div class="main-content">

            @include("header") 
            
            <!--=====About Section Start=====-->
            <section class="about section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>About Us</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="about-content padd-15">
                            <div class="row">
                                <div class="about-text">
                                    <h3>We are Double HI, <span>1st year students at ESI</span></h3>
                                    <p>We are a group of four students from ESI, passionate about education and technology. We believe that learning should be fun and accessible to everyone — that’s why we created this platform. <span class="bold">Learning</span> is an educational platform launched in April 2025 by <span class="bold">Double HI</span>, a name derived from the initials of its creators: Hadil Barzani, Hamza Ahddad, Ijlal Sellak, and Idriss Jabri. This platform is currently designed for children aged 4 to 12, helping them study various subjects and languages, prepare for the future, and better understand topics they may find challenging.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--=====About Section END=====-->
        </div>
        @include("footer") 
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>