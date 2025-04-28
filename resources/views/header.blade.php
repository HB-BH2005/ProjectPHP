<header class="header">    
    <div class="top-bar">
        <form class="search-form" onsubmit="handleSearch(event)">
            <input type="text" id="search-input" class="search-input" placeholder="Search...">
            <button type="submit" class="search-btn" aria-label="Search">
                <i class="fa fa-search"></i>
            </button>
        </form>
<a href="{{ route('login') }}" class="login-btn">Login</a>
</div>
</header>
