<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=1.0">
    <link rel="stylesheet" href="{{ asset('css/skins/color-1.css') }}?v=1.0">
    <link rel="stylesheet" href="{{ asset('css/style_admin.css') }}?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
        .content-item {
            width: 100%;
            max-width: 800px; /* Limit the max width */
            margin: 20px auto; /* Center */
            padding: 20px;
            border: 1px solid var(--bg-black-50);
            border-radius: 10px;
            background-color: var(--bg-black-100);
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            text-align: center;
        }

        .content-item p {
            font-size: 18px;
            line-height: 1.8;
            color: var(--text-black-700);
            margin: 0;
        }

        .content-item .btn-primary {
            display: inline-block;
            font-size: 16px;
            font-weight: 600;
            padding: 12px 25px;
            color: white;
            border-radius: 5px;
            background: var(--skin-color);
            text-decoration: none;
            margin-top: 10px;
            transition: all 0.3s ease;
        }

        .content-item .btn-primary:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        .video-container {
            width: 100%;
            max-width: 100%;
            height: auto;
            aspect-ratio: 16/9;
            overflow: hidden;
            position: relative;
            border-radius: 10px;
            margin: 0 auto;
        }

        .video-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .content-item audio, .content-item img {
            width: 100%;
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 10px;
        }

        /* Responsive for mobile */
        @media (max-width: 768px) {
            .content-item {
                padding: 15px;
            }
            .content-item p {
                font-size: 16px;
            }
        }
</style>

</head>

<body>
    <div class="main-container">
        @include('navbar')

        <div class="main-content">
            @include('header')

            <section class="content-lesson-details section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>{{ $lesson->title }}</h2>
                        </div>
                    </div>

                    <!-- Loop through each content item and display it in a row -->
                    @foreach ($lesson->contentLessons as $contentLesson)
                        <div class="row">
                            <div class="col-12 content-item">

                                <!-- Display content based on content type -->
                                @if ($contentLesson->content_type == 'text')
                                    <p>{{ $contentLesson->text_content }}</p>
                                @elseif ($contentLesson->content_type == 'pdf')
                                    <a href="{{ asset('storage/'.$contentLesson->content_url) }}" target="_blank" class="btn btn-primary">Download PDF</a>
                                @elseif ($contentLesson->content_type == 'video')
                                    <div class="video-container">
                                        <iframe src="{{ $contentLesson->content_url }}" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                @elseif ($contentLesson->content_type == 'audio')
                                    <audio controls>
                                        <source src="{{ asset('storage/'.$contentLesson->content_url) }}" type="audio/mp3">
                                        Your browser does not support the audio element.
                                    </audio>
                                @elseif ($contentLesson->content_type == 'cheatsheet')
                                    <a href="{{ asset('storage/'.$contentLesson->content_url) }}" target="_blank" class="btn btn-primary">Download Cheatsheet</a>
                                @elseif ($contentLesson->content_type == 'image')
                                    <img src="{{ asset('storage/'.$contentLesson->content_url) }}" alt="Content Image">
                                @endif
                            </div>
                        </div>
                    @endforeach

                    <!-- Navigation buttons (Next and Previous) -->
                    <div class="btn-group">
                        @if ($previousLesson)
                            <a href="{{ route('admin.content_lessons.show', $previousLesson->id) }}" class="btn btn-primary">Previous Lesson: {{ $previousLesson->title }}</a>
                        @endif

                        @if ($nextLesson)
                            <a href="{{ route('admin.content_lessons.show', $nextLesson->id) }}" class="btn btn-primary">Next Lesson: {{ $nextLesson->title }}</a>
                        @endif
                    </div>
                </div>
            </section>

            @include('footer')
        </div>
    </div>

    <script src="{{ asset('js/scripts.js') }}?v=1.0"></script>
</body>
</html>
