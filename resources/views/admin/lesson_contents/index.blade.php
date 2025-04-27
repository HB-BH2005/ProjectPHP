<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Content Lessons</title>
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

            <section class="content-lessons section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>All Content Lessons</h2>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Lesson</th>
                                    <th>Content Type</th>
                                    <th>Content</th>
                                    <th>Order</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($lessonContents->isNotEmpty())
                                    @foreach ($lessonContents as $lessonContent)
                                        <tr>
                                            <td>{{ $lessonContent->lesson->title }}</td>
                                            <td>{{ ucfirst($lessonContent->content_type) }}</td>
                                            <td>
                                                @if ($lessonContent->content_type == 'text')
                                                    <p>{{ Str::limit($lessonContent->text_content, 50) }}</p>
                                                @elseif ($lessonContent->content_type == 'pdf')
                                                    <a href="{{ asset('storage/' . $lessonContent->content_url) }}" target="_blank">PDF Link</a>
                                                @elseif ($lessonContent->content_type == 'video')
                                                    <a href="{{ asset('storage/' . $lessonContent->content_url) }}" target="_blank">Video Link</a>
                                                @elseif ($lessonContent->content_type == 'audio')
                                                    <a href="{{ asset('storage/' . $lessonContent->content_url) }}" target="_blank">Audio Link</a>
                                                @elseif ($lessonContent->content_type == 'image')
                                                    <img src="{{ asset('storage/' . $lessonContent->content_url) }}" alt="Image" width="100">
                                                @elseif ($lessonContent->content_type == 'cheatsheet')
                                                    <a href="{{ asset('storage/' . $lessonContent->content_url) }}" target="_blank">Cheatsheet Link</a>
                                                @endif
                                            </td>
                                            <td>{{ $lessonContent->order }}</td>
                                            <td>
                                                <a href="{{ route('admin.lesson_contents.edit', $lessonContent->id) }}" class="action-icon">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.lesson_contents.destroy', $lessonContent->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="action-icon delete-icon" onclick="return confirm('Are you sure you want to delete this content?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">No content lessons found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>

                        <div class="add-content-lesson">
                            <a href="{{ route('admin.lesson_contents.create') }}" class="btn">Add New Content Lesson</a>
                        </div>
                    </div>
                </div>
            </section>

            @include('admin.footer')
        </div>
    </div>

    <script src="{{ asset('js/scripts.js') }}?v=1.0"></script>
</body>
</html>
