<?php
/*
Template Name: Services Page
*/
get_header();
?>
<main class="services-section">
    <h2 class="services-title bold-txt blue">Services</h2>
    <div class="services-row wrap">
        <div class="col-4">
            <div class="service-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/vaccine-icon.svg" alt="Vaccinations" class="service-icon">
                <div class="service-content">
                    <h3 class="service-title">Vaccinations</h3>
                    <p class="service-description">Preventative care through the administration of routine vaccines to protect your pet from contagious diseases.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="service-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/anesthesia-icon.svg" alt="Anesthesia" class="service-icon">
                <div class="service-content">
                    <h3 class="service-title">Anesthesia</h3>
                    <p class="service-description">Provision of local, regional, or general anesthesia to ensure your pet's comfort and safety during surgical procedures, overseen by an experienced anesthesiologist.</p>
                </div>  
            </div>
        </div>
        <div class="col-4">
            <div class="service-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/grooming-icon.svg" alt="Grooming" class="service-icon">
                <div class="service-content">
                    <h3 class="service-title">Grooming</h3>
                    <p class="service-description">Professional grooming services, including haircuts, baths, nail trimming, and other hygiene-related treatments to keep your pet clean and healthy.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="service-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/dermatology-icon.svg" alt="Veterinary Dermatology" class="service-icon">
                <div class="service-content">
                    <h3 class="service-title">Veterinary Dermatology</h3>
                    <p class="service-description">Comprehensive care for diagnosing and treating skin diseases, allergies, and infections in pets.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="service-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/diagnostic-icon.svg" alt="Diagnostic Services" class="service-icon">
                <div class="service-content">
                    <h3 class="service-title">Diagnostic Services</h3>
                    <p class="service-description">Advanced diagnostic tools and procedures, such as ultrasound, X-ray, and other medical tests, to thoroughly assess your pet's health condition.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="service-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/microchipping-icon.svg" alt="Pet Microchipping" class="service-icon">
                <div class="service-content">
                    <h3 class="service-title">Pet Microchipping</h3>
                    <p class="service-description">Quick and painless implantation of a microchip in the scruff with the pet's identification information.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="service-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/dentistry-icon.svg" alt="Dentistry" class="service-icon">
                <div class="service-content">
                    <h3 class="service-title">Dentistry</h3>
                    <p class="service-description">Diagnosis and treatment of dental diseases. We offer teeth cleaning, scaling, extractions, and treatment for periodontal disease.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="service-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/oncology-icon.svg" alt="Oncology Treatment" class="service-icon">
                <div class="service-content">
                    <h3 class="service-title">Oncology Treatment</h3>
                    <p class="service-description">Diagnosis and therapy for cancer-related diseases in animals. We offer a range of diagnostic tools, such as biopsies, ultrasounds, and advanced imaging.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="service-item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/surgery-icon.svg" alt="Animal Surgery" class="service-icon">
                <div class="service-content">
                    <h3 class="service-title">Animal Surgery</h3>
                    <p class="service-description">Surgical treatment of diseases in pets involves a wide range of procedures aimed at diagnosing, treating, and managing various health conditions.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="overlay"></div>

<?php
get_footer();
?>
