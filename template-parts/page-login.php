<?php
/*
Template Name: Login Page
*/
get_header();
?>
<main class="auth-section">
    <div class="auth-form">
        <a href="/" class="logo-small">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/logo-small.svg" alt="Pet Life Logo" class="logo-image">
        </a>
        <h2 class="auth-title">Log in to your account</h2>
        <form>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <span id="togglePassword" class="toggle-password">Show</span>
            </div>
            <button type="submit" class="auth-button blue-button">Login</button>
            <p>Don’t have an account? <a href="<?php echo site_url('/register'); ?>"><span class="blue">Register</span></a></p>
        </form>
    </div>
</main>
<?php
get_footer();
?>
