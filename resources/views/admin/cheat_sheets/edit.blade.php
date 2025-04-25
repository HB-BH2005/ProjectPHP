<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Subject</title>
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
                            <h2>Edit Subject</h2>
                        </div>
                    </div>

<form action="{{ route('admin.cheat_sheets.update', $cheatSheet->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-12">
            <label for="nom">Cheat Sheet Name</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $cheatSheet->nom) }}" required>
        </div>

        <div class="col-12">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control" rows="8" required>{{ old('content', $cheatSheet->content) }}</textarea>
        </div>

        <div class="col-12">
            <label for="level_id">Level</label>
            <select name="level_id" id="level_id" class="form-control" required>
                <option value="">Select a Level</option>
                @foreach($levels as $level)
                    <option value="{{ $level->id }}" {{ $cheatSheet->level_id == $level->id ? 'selected' : '' }}>
                        {{ $level->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-12">
            <label for="subject_id">Subject</label>
            <select name="subject_id" id="subject_id" class="form-control" required>
                <option value="">Select a Subject</option>
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ $cheatSheet->subject_id == $subject->id ? 'selected' : '' }}>
                        {{ $subject->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-12">
            <label for="cover">Cover Image (optional)</label>
            <input type="file" name="cover" id="cover" class="form-control">
            @if($cheatSheet->cover)
                <img src="{{ asset('storage/' . $cheatSheet->cover) }}" alt="Cover Image" style="max-width: 200px; margin-top: 10px;">
            @endif
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary mt-3">Update Cheat Sheet</button>
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
