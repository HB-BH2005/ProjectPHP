<!-- filepath: c:\Users\ijlal\ProjectPHP-3 - Copie\ProjectPHP\resources\views\admin\courses\index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>All Cheat Sheets</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v=1.0">
</head>
<body>
    <div class="main-container">
        @include('admin.navbar')

        <div class="main-content">
            @include('admin.header')

            <section class="cheat-sheets section">
                <div class="container">
                    <div class="row">
                        <div class="section-title padd-15">
                            <h2>All Cheat Sheets</h2>
                        </div>
                    </div>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($cheatSheets->count() > 0)
                                    @foreach ($cheatSheets as $cheatSheet)
                                        <tr>
                                            <td>{{ $cheatSheet->name }}</td>
                                            <td>{{ $cheatSheet->description }}</td>
                                            <td>{{ $cheatSheet->level->nom }}</td>
                                            <td>
                                                <a href="{{ route('admin.cheat_sheets.edit', $cheatSheet->id) }}" class="action-icon">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.cheat_sheets.delete', $cheatSheet->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="action-icon delete-icon" onclick="return confirm('Are you sure you want to delete this course?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4">No courses found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="add-cheat-sheet">
                            <a href="{{ route('admin.cheat_sheets.create') }}" class="btn">Add New Cheat Sheet</a>
                        </div>
                    </div>
                </div>
            </section>

            @include('admin.footer')
        </div>
    </div>
</body>
</html>