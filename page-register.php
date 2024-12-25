<?php
/*
Template Name: Register Page
*/
get_header();
?>
<main class="auth-section">
    <div class="auth-form">
        <a href="/" class="logo-small">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/logo-small.svg" alt="Pet Life Logo" class="logo-image">
        </a>
        <h2 class="auth-title">Enter your information to create account</h2>
        <form>
            <div class="input-group">
                <label for="reg-username">Username</label>
                <input type="text" id="reg-username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="input-group">
                <label for="reg-password">Password</label>
                <input type="password" id="reg-password" name="password" placeholder="Enter your password" required>
                <span id="togglePassword" class="toggle-password">Show</span>
            </div>
            <button type="submit" class="auth-button blue-button">Create Account</button>
            <p>Already have an account? <a href="<?php echo site_url('/login'); ?>"><span class="blue">Log in</span></a></p>
        </form>
    </div>
</main>
<?php
get_footer();
?>
