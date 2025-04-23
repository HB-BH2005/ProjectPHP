<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=1.0">
    <link rel="stylesheet" href="{{ asset('css/skins/color-1.css') }}?v=1.0">
    <link rel="stylesheet" href="{{ asset('css/style_admin.css') }}?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <div class="main-container">
        @include('admin.navbar')

        <div class="main-content">
            @include('admin.header')

            <section class="levels section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Courses</h2>
                        </div>
                    </div>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Level</th>
                                    <th>Subject</th>
                                    <th>Content</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($courses) && $courses->count() > 0)
                                    @foreach ($courses as $course)
                                        <tr>
                                            <td>{{ $course->nom }}</td>
                                            <td>{{ $course->level->nom }}</td>
                                            <td>{{ $course->subject->nom }}</td>
                                            <td>
                                                @php
                                                    $content = $course->content;
                                                    $fileExtension = pathinfo($content, PATHINFO_EXTENSION);
                                                @endphp

                                                @if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif']))
                                                    <img src="{{ asset($content) }}" alt="content" width="50">
                                                @elseif (in_array($fileExtension, ['mp4', 'webm', 'ogg']))
                                                    <video width="100" controls>
                                                        <source src="{{ asset($content) }}" type="video/{{ $fileExtension }}">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                @elseif (in_array($fileExtension, ['mp3', 'wav', 'ogg']))
                                                    <audio controls>
                                                        <source src="{{ asset($content) }}" type="audio/{{ $fileExtension }}">
                                                        Your browser does not support the audio tag.
                                                    </audio>
                                                @elseif ($fileExtension === 'pdf')
                                                    <a href="{{ asset($content) }}" target="_blank">View PDF</a>
                                                @else
                                                    <span>Unsupported file type</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.courses.edit', $course->id) }}" class="action-icon"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('admin.courses.delete', $course->id) }}" class="action-icon delete-icon" onclick="return confirm('Are you sure you want to delete this course?')"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">No courses found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="add-course">
                            <a href="{{ route('admin.courses.create') }}" class="btn">Add New Course</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="{{ asset('js/scripts.js') }}?v=1.0"></script>
</body>

</html>