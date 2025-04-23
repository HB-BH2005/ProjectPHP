<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levels</title>
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
                            <h2>Levels</h2>
                        </div>
                    </div>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($levels->count() > 0)
                                    @foreach ($levels as $level)
                                        <tr>
                                            <td>{{ $level->nom }}</td>
                                            <td>{{ $level->description }}</td>
                                            <td>
                                                <a href="{{ route('admin.levels.edit', $level->id) }}" class="action-icon">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.levels.delete', $level->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="action-icon delete-icon" onclick="return confirm('Are you sure you want to delete this level?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="3">No levels found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="add-level">
                            <a href="{{ route('admin.levels.create') }}" class="btn">Add New Level</a>
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
