<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
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
            <section class="MyCourses section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>My Courses</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="MyCourses-heading padd-15">
                            <h2>History</h2>
                        </div>
                        <div class="MyCourses-content padd-15">
                            <div class="row">
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="MyCourses-heading padd-15">
                            <h2>Bookmarks</h2>
                        </div>
                        <div class="MyCourses-content padd-15">
                            <div class="row">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('footer')
        </div>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
