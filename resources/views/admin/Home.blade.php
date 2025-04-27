<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Platform</title>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=1.0">
    <link rel="stylesheet" href="{{ asset('css/skins/color-1.css') }}?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <div class="main-container">
        @include('admin.navbar') 
        <div class="main-content">
            @include('admin.header') 
            <!--=== Home Section start ===-->
            
            <section class="home section">
                <div class="container">
                    <div class="row">
                        <div class="home-info padd-15">
                            <h3 class="hello">Hello <span class="name">Administrator</span>, welcome to your platform</h3>
                            <p>
                                Here, you can add, delete, and update courses, manage users, and view your messages.
                            </p>
                            <a href="{{ route('logout') }}" class="btn logout" id="logout-link">Logout</a>
                            <!-- Hidden Logout Form -->
                            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                                @csrf
                            </form>

                            <script>
                                document.getElementById('logout-link').addEventListener('click', function(e) {
                                    e.preventDefault();  // Prevent the default anchor link behavior
                                    document.getElementById('logout-form').submit();  // Submit the hidden form
                                });
                            </script>

                        </div>
                    </div>
                </div>
            </section>
            <!--=== Home Section END ===-->
        </div>
        @include('admin.footer') 
    </div>
    <script src="{{ asset('js/scripts.js') }}?v=1.0"></script>
</body>
</html>