<header class="header">    
    <div class="top-bar" style="background: linear-gradient(to right,rgb(43, 39, 238),rgb(22, 21, 21));">
        <form class="search-form">
            <input type="text" class="search-input" placeholder="Search...">
            <button type="submit" class="search-btn" aria-label="Search">
                <i class="fa fa-search"></i>
            </button>
        </form>
        <a href="#" class="register-btn" id="open-register-modal">Register</a>
        <a href="#" class="login-btn" id="open-login-modal">Login</a>
        
    </div>

    <!-- Login Modal -->
    <div class="login-modal" id="login-modal">
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

    <!-- Register Modal -->
    <div class="login-modal" id="register-modal">
        <div class="login-modal-content">
            <span class="close-modal" id="close-register-modal">&times;</span>
            <h2>Register</h2>
            <form>
                <div class="form-group">
                    <input type="text" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>
    <!-- End of Register Modal -->
</header>