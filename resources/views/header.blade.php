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

<!-- Login Modal -->
<div class="login-modal" id="login-modal" style="display:none;">
    <div class="login-modal-content">
        <span class="close-modal" id="close-login-modal">&times;</span>
        <h2>Login</h2>
        <form>
            <div class="form-group">
                <input type="text" id="username"  name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password"  id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <a href="#" class="forgot-password">Forgot my password?</a>
    </div>
</div>
</header>
<script src="{{ asset('js/scripts.js') }}"></script>
