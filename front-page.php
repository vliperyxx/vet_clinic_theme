<?php
/* 
 * Main page template 
 */
get_header(); 
?>
    <main class="hero-section">
        <div class="hero-content">
            <h2 class="hero-subtitle extrabold-txt light-blue">YOUR TRUSTED VETERINARY CLINIC</h2>
            <h1 class="hero-title extrabold-txt blue">PET LIFE</h1>
            <p class="hero-text">Caring for your pets with love and expertise</p>
            <button class="book-appointment-button">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/appointment-icon.svg" alt="Calendar Icon" class="button-icon">
                Book an Appointment
            </button>
        </div>
        <div class="hero-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/hero-banner/hero.png" alt="Dog">
        </div>

        <div class="hero-line"></div>
        <div class="hero-circle"></div>
    </main>    

    <div class="overlay"></div>

<?php
get_footer();
?>
