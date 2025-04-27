<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Lesson</title>
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

            <section class="subjects section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>Create Lesson</h2>
                        </div>
                    </div>

                    <!-- Lesson Create Form -->
                    <form action="{{ route('admin.lessons.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Lesson Title -->
                            <div class="col-12">
                                <label for="title">Lesson Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                            </div>

                            <!-- Lesson Description -->
                            <div class="col-12">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
                            </div>

                            <!-- Subject Selection -->
                            <div class="col-12">
                                <label for="subject_id">Subject</label>
                                <select name="subject_id" id="subject_id" class="form-control" required>
                                    <option value="">Select a Subject</option>
                                    @foreach($subjects as $subject)
                                        <option value="{{ $subject->id }}" {{ old('subject_id') == $subject->id ? 'selected' : '' }}>
                                            {{ $subject->nom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Level Selection -->
                            <div class="col-12">
                                <label for="level_id">Level</label>
                                <select name="level_id" id="level_id" class="form-control" required>
                                    <option value="">Select a Level</option>
                                    @foreach($levels as $level)
                                        <option value="{{ $level->id }}" {{ old('level_id') == $level->id ? 'selected' : '' }}>
                                            {{ $level->nom }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Order -->
                            <div class="col-12">
                                <label for="order">Order</label>
                                <input type="number" name="order" id="order" class="form-control" value="{{ old('order', 0) }}" min="0" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mt-3">Create Lesson</button>
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
