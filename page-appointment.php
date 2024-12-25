<?php
/*
Template Name: Appointment Page
*/
get_header();
?>

<main class="appointment-section">
    <div class="appointment-form_container">
        <h2 class="appointment-title bold-txt blue">Book an Appointment</h2>
        <form class="appointment-form">
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" placeholder="Enter your first name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" placeholder="Enter your last name" required>
            </div>
            <div class="form-group">
                <label for="phone-number">Phone Number</label>
                <input type="tel" id="phone-number" name="phone-number" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="service">Service</label>
                <select id="service" name="service" required>
                    <option value="" disabled selected>Select a service</option>
                    <option value="Vaccinations">Vaccinations</option>
                    <option value="Anesthesia">Anesthesia</option>
                    <option value="Grooming">Grooming</option>
                    <option value="Veterinary Dermatology">Veterinary Dermatology</option>
                    <option value="Diagnostic Services">Diagnostic Services</option>
                    <option value="Pet Microchipping">Pet Microchipping</option>
                    <option value="Dentistry">Dentistry</option>
                    <option value="Oncology Treatment">Oncology Treatment</option>
                    <option value="Animal Surgery">Animal Surgery</option>
                </select>
            </div>
            <button type="submit" class="appointment-button blue-button">Continue</button>
        </form>
    </div>        
    <div class="appointment-image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/images/appointment/dog-raising-paw.png" alt="Dog raising paw" class="appointment-dog_image">
    </div>
</main>

<div class="overlay"></div>

<?php
get_footer();
?>
