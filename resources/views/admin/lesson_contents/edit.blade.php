<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Content Lesson</title>
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

            <section class="content-lesson section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Edit Content Lesson: {{ $lessonContent->lesson->title }}</h2>
                        </div>
                    </div>

                    <form action="{{ route('admin.lesson_contents.update', $lessonContent->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-12">
                                <label for="content_type">Content Type</label>
                                <select name="content_type" id="content_type" class="form-control" required>
                                    <option value="text" {{ $lessonContent->content_type == 'text' ? 'selected' : '' }}>Text</option>
                                    <option value="pdf" {{ $lessonContent->content_type == 'pdf' ? 'selected' : '' }}>PDF</option>
                                    <option value="video" {{ $lessonContent->content_type == 'video' ? 'selected' : '' }}>Video</option>
                                    <option value="audio" {{ $lessonContent->content_type == 'audio' ? 'selected' : '' }}>Audio</option>
                                    <option value="cheatsheet" {{ $lessonContent->content_type == 'cheatsheet' ? 'selected' : '' }}>Cheatsheet</option>
                                    <option value="image" {{ $lessonContent->content_type == 'image' ? 'selected' : '' }}>Image</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="content_url">Content URL</label>
                                <input type="url" name="content_url" id="content_url" class="form-control" value="{{ old('content_url', $lessonContent->content_url) }}">
                            </div>

                            <div class="col-12">
                                <label for="text_content">Text Content</label>
                                <textarea name="text_content" id="text_content" class="form-control" rows="5">{{ old('text_content', $lessonContent->text_content) }}</textarea>
                            </div>

                            <div class="col-12">
                                <label for="order">Order</label>
                                <input type="number" name="order" id="order" class="form-control" value="{{ old('order', $lessonContent->order) }}" min="0">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mt-3">Update Content Lesson</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            @include('admin.footer')
        </div>
    </div>

    <script src="{{ asset('js/scripts.js') }}?v=1.0"></script>
</body>
</html>
