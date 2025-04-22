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
        @include('navbar')
        <div class="main-content">
            @include('header')
            <!--=== Home Section start ===-->
            <section class="home section">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Hello <span class="name">Little children</span>, to our platform</h3>
                            <p>
                                On this platform you can learn what you want academically, or develop yourself.
                                Be ready for an adventure on the ocean of learning.
                            </p>
                            <a href="{{ route('levels.index') }}" class="btn enroll">Enroll</a>

                        </div>
                    </div>
                </div>
            </section>
            <!--=== Home Section END ===-->
        </div>
        @include('footer') 
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>
