<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levels</title>
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

            <section class="levels section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>All Levels</h2>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($levels as $level)
                            <div class="level-item padd-15">
                                <a href="{{ route('levels.show', $level->slug) }}" class="level-link">
                                    <div class="level-item-inner" style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; transition: box-shadow 0.3s;">
                                        <div class="icon">
                                            <i class="fas fa-folder-open"></i>
                                        </div>
                                        <h4>{{ $level->nom }}</h4>
                                        <p>{{ $level->description ?? 'No description available.' }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    @if ($levels->isEmpty())
                        <p class="padd-15">No levels available yet.</p>
                    @endif
                </div>
            </section>

            @include('footer')
        </div>
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
