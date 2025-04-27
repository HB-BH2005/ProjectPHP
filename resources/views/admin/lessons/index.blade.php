<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Lessons</title>
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

            <section class="lessons section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>All Lessons</h2>
                        </div>
                    </div>

                    
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Lesson Title</th>
                                    <th>Description</th>
                                    <th>Subject</th>
                                    <th>Level</th>
                                    <th>Order</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($lessons->isNotEmpty())
                                    @foreach ($lessons as $lesson)
                                        <tr>
                                            <td>{{ $lesson->title }}</td>
                                            <td>{{ Str::limit($lesson->description, 50) }}</td> <!-- Display Lesson Description -->
                                            <td>{{ $lesson->subject->nom }}</td> <!-- Display Subject Name -->
                                            <td>{{ $lesson->level->nom }}</td> <!-- Display Level Name -->
                                            <td>{{ $lesson->order }}</td>
                                            <td>
                                                <a href="{{ route('admin.lessons.edit', $lesson->id) }}" class="btn btn-warning">Edit</a>
                                                <form action="{{ route('admin.lessons.destroy', $lesson->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this lesson?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <p>No lessons available.</p>
                                @endif
                            </tbody>
                        </table>
                        <div class="add-lesson">
                            <a href="{{ route('admin.lessons.create') }}" class="btn btn-primary">Add New Lesson</a>
                        </div>
                </div>
            </section>

            @include('admin.footer')
        </div>
    </div>

    <script src="{{ asset('js/scripts.js') }}?v=1.0"></script>
</body>
</html>
