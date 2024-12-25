<?php
/*
Template Name: Contacts Page
*/
get_header();
?>

<main class="contacts-section">
    <h2 class="contacts-title bold-txt blue">Contacts</h2>
    <div class="contacts-row wrap">
        <div class="contacts-info">
            <div class="contact-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/contacts/phone-call-icon.svg" alt="Phone Icon" class="contact-icon">
                <div class="phone-numbers">
                    <a href="tel:+380673580967">(380) 067 358 0967</a>
                    <a href="tel:+380445236352">(380) 044 523 6352</a>
                </div>
            </div>
            <div class="contact-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/contacts/map-icon.svg" alt="Location Icon" class="contact-icon">
                <p>Kyiv, 9 Khreshchatyk St.</p>
            </div>
            <div class="contact-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/contacts/clock-icon.svg" alt="Clock Icon" class="contact-icon">
                <p>Working hours:<br><span class="contact-label">Monday - Sunday: 8:30 AM – 9:00 PM (No days off)</span></p>
            </div>
        </div>
        <div class="contacts-social">
            <h3 class="social-title">Connect with us on social media:</h3>
            <ul class="social-list">
                <li class="social-item">
                    <a href="https://www.instagram.com" class="social-link" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/contacts/instagram_icon.svg" alt="Instagram Icon" class="social-icon">
                        @petlifevetclinic
                    </a>
                </li>
                <li class="social-item">
                    <a href="https://www.youtube.com" class="social-link" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/contacts/youtube_icon.svg" alt="YouTube Icon" class="social-icon">
                        Pet Life Veterinary Clinic
                    </a>
                </li>
                <li class="social-item">
                    <a href="https://www.facebook.com" class="social-link" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/contacts/facebook_icon.svg" alt="Facebook Icon" class="social-icon">
                        Pet Life Veterinary Clinic
                    </a>
                </li>
                <li class="social-item">
                    <a href="https://web.telegram.org/a/" class="social-link" target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/contacts/telegram-icon.svg" alt="Telegram Icon" class="social-icon">
                        @petlifevet
                    </a>
                </li>
            </ul>
        </div>
        <div class="contacts-map desktop">
            <a href="https://www.google.com/maps/place/Kyiv,+9+Khreshchatyk+St/" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/contacts/clinic-location-desktop.svg" alt="Map showing clinic location" class="map-image">
            </a>
        </div>
        <div class="contacts-map mobile">
            <a href="https://www.google.com/maps/place/Kyiv,+9+Khreshchatyk+St/" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/contacts/clinic-location.png" alt="Map showing clinic location" class="map-image">
            </a>
        </div>
        <div class="contacts-image desktop">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/contacts/dog-with-doc.svg" alt="Dog Image" class="dog-image">
        </div>
    </div>

    <div class="contacts-line"></div>
</main>

<div class="overlay"></div>

<?php
get_footer();
?>
