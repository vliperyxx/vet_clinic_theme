<?php
/*
Template Name: Prices Page
*/
get_header();
?>

<main class="prices-section"> 
    <h2 class="prices-title bold-txt blue">Prices</h2>
    <div class="prices-row wrap">
        <div class="price-item">
            <div class="price-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/vaccine-icon.svg" alt="Vaccinations">
            </div>
            <div class="price-content">
                <h3 class="price-name">Vaccinations</h3>
                <span class="price-amount blue">1500 UAH</span>
            </div>
        </div>
        <div class="price-item">
            <div class="price-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/anesthesia-icon.svg" alt="Anesthesia">
            </div>
            <div class="price-content">
                <h3 class="price-name">Anesthesia</h3>
                <span class="price-amount blue">550 UAH</span>
            </div>
        </div>
        <div class="price-item">
            <div class="price-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/grooming-icon.svg" alt="Grooming">
            </div>
            <div class="price-content">
                <h3 class="price-name">Grooming</h3>
                <span class="price-amount blue">1300 UAH</span>
            </div>
        </div>
        <div class="price-item">
            <div class="price-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/dermatology-icon.svg" alt="Veterinary Dermatology">
            </div>
            <div class="price-content">
                <h3 class="price-name">Veterinary Dermatology</h3>
                <span class="price-amount blue">675 UAH</span>
            </div>
        </div>
        <div class="price-item">
            <div class="price-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/diagnostic-icon.svg" alt="Diagnostic Services">
            </div>
            <div class="price-content">
                <h3 class="price-name">Diagnostic Services</h3>
                <span class="price-amount blue">3200 UAH</span>
            </div>
        </div>
        <div class="price-item">
            <div class="price-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/microchipping-icon.svg" alt="Pet Microchipping">
            </div>
            <div class="price-content">
                <h3 class="price-name">Pet Microchipping</h3>
                <span class="price-amount blue">1250 UAH</span>
            </div>
        </div>
        <div class="price-item">
            <div class="price-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/dentistry-icon.svg" alt="Dentistry">
            </div>
            <div class="price-content">
                <h3 class="price-name">Dentistry</h3>
                <span class="price-amount blue">725 UAH</span>
            </div>
        </div>
        <div class="price-item">
            <div class="price-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/oncology-icon.svg" alt="Oncology Treatment">
            </div>
            <div class="price-content">
                <h3 class="price-name">Oncology Treatment</h3>
                <span class="price-amount blue">4010 UAH</span>
            </div>
        </div>
        <div class="price-item">
            <div class="price-icon">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/surgery-icon.svg" alt="Animal Surgery">
            </div>
            <div class="price-content">
                <h3 class="price-name">Animal Surgery</h3>
                <span class="price-amount blue">8850 UAH</span>
            </div>
        </div>
    </div>
</main>

<div class="overlay"></div>

<?php
get_footer();
?>
