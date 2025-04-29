<head>
    <link rel="stylesheet" href="{{ asset('css/search-highlight.css') }}">
</head>
<header class="header">    
    <div class="top-bar">
        <form class="search-form" onsubmit="handleSearch(event)">
            <input type="text" id="search-input" class="search-input" placeholder="Search...">
            <button type="submit" class="search-btn" aria-label="Search">
                <i class="fa fa-search"></i>
            </button>
        </form>

        <div class="profile">
            <img src="{{ asset('images/Profile-PNG-Photo.png') }}" alt="Profile Picture" class="profile-pic" onclick="toggleProfilePopup()">
            
            <div class="profile-dropdown" id="profileDropdown" style="display: none;">
                <a href="#" onclick="openProfileModal()">Profile</a>
                <a href="#" onclick="openSettingsModal()">Settings</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>
    </div>  
</header>
<script src="{{ asset('js/scripts.js') }}"></script>
