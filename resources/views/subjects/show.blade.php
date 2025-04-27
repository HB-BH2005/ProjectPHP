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
                                 style="width: 100%; height: auto; border-radius: 10px; margin-bottom: 20px; display: block;">
                            <p style="font-weight: bold; text-align: center;">{{ $subject->description }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="section-title padd-15">
                            <h3 style="font-weight: bold;font-size: 30px;color: var(--text-black-900); margin-bottom: 20px;">Lessons</h3>
                        </div>
                    </div>

                    <div class="row">
                        @if ($subject->lessons->isNotEmpty())
                            @foreach ($subject->lessons as $lesson)
                                <div class="lesson-item padd-15" style="border: 2px solid #ddd; padding: 20px; border-radius: 8px; margin-bottom: 15px; width: 100%; box-sizing: border-box;">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <h4 style="margin: 0; font-weight: bold;">
                                            <a href="{{ route('lessons.show', $lesson->id) }}">{{ $lesson->title }}</a>
                                        </h4>
                                        <button onclick="toggleDescription('lesson-{{ $lesson->id }}')" style="background: none; border: none; cursor: pointer;">
                                            <i class="fas fa-chevron-down" id="icon-lesson-{{ $lesson->id }}"></i>
                                        </button>
                                    </div>
                                    <div id="lesson-{{ $lesson->id }}" style="display: none; margin-top: 10px;">
                                        <p style="margin: 0; color: #555;">{{ $lesson->description ?? 'No description available.' }}</p>
                                    </div>
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
    <script>
        function toggleDescription(id) {
            const description = document.getElementById(id);
            const icon = document.getElementById('icon-' + id);

            if (description.style.display === 'none' || description.style.display === '') {
                description.style.display = 'block';
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
            } else {
                description.style.display = 'none';
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            }
        }
    </script>
</body>
</html>
