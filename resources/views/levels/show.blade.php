<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $level->nom ?? 'Subjects' }}</title>

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
                            <div class="levels-title padd-15">
                                <h2>{{ $level->nom ?? 'N/A' }}</h2>
                            </div>
                        </div>
                        <div class="row">
                            @if ($subjects->isNotEmpty())
                                @foreach ($subjects as $subject)
                                    <div class="level-item padd-15">
                                        <a href="{{ route('subjects.show', $subject->id) }}" class="level-link">
                                            <div class="level-item-inner" >
                                                <img src="{{ asset('storage/' . $subject->cover) }}" alt="{{ $subject->nom }}" >
                                                <h4>{{ $subject->nom }}</h4>
                                                <p>{{ $subject->description }}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                                
                            @else
                                <div class="padd-15">
                                    <p>No subjects available yet for this level.</p>
                                </div>
                        
                            @endif
                        </div>
                    </div>
                </section>

                @include('footer')
            </div>
        </div>

        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
