<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/skins/color-1.css">
    <link rel="stylesheet" href="../css/style_admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <!--===Main container start===-->
    <div class="main-container">
        <header class="header">
            <div class="top-bar" style="height: 50px;"></div>
        </header>

        <!--===Main content start===-->
        <div class="main-content">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Login</h2>
                        </div>
                    </div>
                    <div class="row">
                        @if ($errors->any())
                            <div class="alert alert-danger" style="color: red; margin-bottom: 15px;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login.post') }}">
                            @csrf
                            <div class="form-group padd-15">
                                <label for="email">Email Address</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                                    style="width: 600px; padding: 12px; border-radius: 10px; border: 1px solid #ccc; display: block; margin-top: 5px; margin-left: auto; margin-right: auto;" />
                            </div>

                            <div class="form-group padd-15">
                                <label for="password">Password</label>
                                <input id="password" type="password" name="password" required
                                    style="width: 600px; padding: 12px; border-radius: 10px; border: 1px solid #ccc; display: block; margin-top: 5px; margin-left: auto; margin-right: auto;" />
                            </div>

                            <div class="form-group padd-15">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        <!--===Main content END===-->

        @include('footer')
    </div>
    <!--===Main container END===-->

    <script src="../js/scripts.js?v=1.0"></script>
</body>
</html>
