<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add New User</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style_admin.css') }}" />
</head>
<body>
    <div class="main-container">
        @include('admin.navbar')
        <div class="main-content">
            @include('admin.header')

            <section class="add-user section">
                <div class="container">
                    <div class="section-title padd-15">
                        <h2>Add New Admin</h2>
                    </div>
                    <form action="{{ route('admin.users.store') }}" method="POST" class="user-form">
                        @csrf
                        <div class="form-group">
                            <label for="username">Name:</label>
                            <input type="text" id="username" name="username" value="{{ old('username') }}" required />
                            @error('name')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required />
                            @error('email')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required />
                            @error('password')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password:</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required />
                            @error('password_confirmation')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
               
                        <button type="submit" class="btn">Add Admin</button>
                    </form>
                </div>
            </section>

            @include('admin.footer')
        </div>
    </div>
</body>
</html>
