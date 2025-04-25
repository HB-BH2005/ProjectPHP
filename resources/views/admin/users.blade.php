<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link href="https://fonts.googleapis.com/css2?family=Clicker+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css?v=1.0">
    <link rel="stylesheet" href="../css/skins/color-1.css?v=1.0">
    <link rel="stylesheet" href="../css/style_admin.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <!--===Main container start===-->
    <div class="main-container">
        <!-- Include Navbar -->
        @include("admin.navbar")

        <div class="main-content">
            <!-- Include Topbar -->
            @include("admin.header")


            <section class="users section">
                <div class="container">
                    <div class="row">
                    <div class="section-title padd-15">
                        <h2>Users</h2>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    </div>
                    <div class="row">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>score</th>
                                    <th>role</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if($users->count() > 0)
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->score ?? '-' }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>
                                                <a href="{{ url('admin/users/' . $user->id . '/edit') }}" class="action-icon">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ url('admin/users/' . $user->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="action-icon delete-icon" onclick="return confirm('Are you sure you want to delete this user?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">No users found.</td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
<div class="add-user">
    <a href="{{ route('admin.add_user') }}" class="btn">Add New user</a>
</div>
                </div>
                @include("admin.footer")
        </div>
    </div>
    <script src="../js/scripts.js?v=1.0"></script>
</body>

</html>