<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Lesson Content</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="main-container">
        @include('admin.navbar')

        <div class="main-content">
            @include('admin.header')

            <section class="content-lesson section">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="container">
                <div class="row">
                    <div class="section-title padd-15">
                            <h2>Create Lesson Content</h2>
                    </div>
                    </div>

    <form action="{{ route('admin.lesson_contents.store') }}" method="POST" enctype="multipart/form-data" class="p-4 border rounded shadow-sm bg-light">
    @csrf

    <div class="row g-3">
        <div class="col-12">
            <label for="lesson_id" class="form-label">Select Lesson</label>
            <select name="lesson_id" id="lesson_id" class="form-select" required>
                <option value="">-- Choose a Lesson --</option>
                @foreach ($lessons as $lesson)
                    <option value="{{ $lesson->id }}">{{ $lesson->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12">
            <label for="content_type" class="form-label">Content Type</label>
            <select name="content_type" id="content_type" class="form-select" required>
                <option value="">-- Choose Content Type --</option>
                <option value="text">Text</option>
                <option value="pdf">PDF</option>
                <option value="video">Video</option>
                <option value="audio">Audio</option>
                <option value="cheatsheet">Cheatsheet</option>
                <option value="image">Image</option>
            </select>
        </div>

        <div class="col-12">
            <label for="content_url" class="form-label">Upload File</label>
            <input type="file" name="content_url" id="content_url" class="form-control" accept=".pdf,.mp4,.mp3,.jpg,.jpeg,.png">
        </div>

        <div class="col-12">
            <label for="text_content" class="form-label">Text Content</label>
            <textarea name="text_content" id="text_content" class="form-control" rows="5" placeholder="Write your text content here..."></textarea>
        </div>

        <div class="col-12">
            <label for="order" class="form-label">Display Order</label>
            <input type="number" name="order" id="order" class="form-control" min="0" placeholder="e.g., 1, 2, 3...">
        </div>

        <div class="col-12 text-end">
            <button type="submit" class="btn btn-success mt-4">
                <i class="fas fa-save"></i> Save Lesson Content
            </button>
        </div>
    </div>
</form>

                </div>
            </section>

            @include('admin.footer')
        </div>
    </div>
</body>
</html>
