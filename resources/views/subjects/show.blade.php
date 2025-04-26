<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject->nom }}</title>

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

            <section class="subject-detail section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>{{ $subject->nom }}</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="level padd-15">
                            <img src="{{ asset('storage/' . ($subject->cover ?? 'default.png')) }}" 
                                 alt="{{ $subject->nom }}" 
                                 style="max-width: 100%; border-radius: 10px; margin-bottom: 20px;">
                            <p>{{ $subject->description }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="section-title padd-15">
                            <h3 style="font-weight: bold;font-size: 30px;color: var(--text-black-900); margin-bottom: 20px; margin: top 20px;">Courses</h3>
                        </div>
                    </div>

                    <div class="row">
                        @if ($subject->courses->isNotEmpty())
                            @foreach ($subject->courses as $course)
                                <div class="course-item padd-15" style="border: 1px solid #ddd; padding: 15px; border-radius: 8px; margin-bottom: 15px;">
                                    <h4>{{ $course->nom }}</h4>
                                    <p>{{ $course->description ?? 'No description available.' }}</p>
                                </div>
                            @endforeach
                        @else
                            <p>No lessons available for this subject.</p>
                        @endif
                    </div>

                    <div class="row padd-15" style="margin-top: 20px;">
                        <a href="{{ url()->previous() }}" class="btn">← Back</a>
                    </div>
                </div>
            </section>

            @include('footer')
        </div>
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
