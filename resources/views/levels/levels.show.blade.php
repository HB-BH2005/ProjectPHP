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

            <section class="Subjects section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>{{ $level->nom ?? 'N/A' }}</h2>
                        </div>
                    </div>

                    @if ($subjects->count())
                        <div class="row">
                            @foreach ($subjects as $subject)
                                <div class="level-item padd-15">
                                    <a href="{{ route('subjects.show', $subject->id) }}" class="level-link">
                                        <div class="level-item-inner" >
                                            <img src="{{ asset('image/' . ($subject->cover ?? 'default.png')) }}" 
                                                 alt="{{ $subject->nom }}" 
                                                 style="width: 100%; height: auto; border-radius: 6px; margin-bottom: 10px;">
                                            <h4>{{ $subject->nom }}</h4>
                                            <p>{{ $subject->description }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="padd-15">No subjects available yet for this level.</p>
                    @endif
                </div>
            </section>

            @include('footer')
        </div>
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
