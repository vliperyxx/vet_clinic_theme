<?php
/*
Template Name: Veterinarian Info Page
*/
get_header();
?>

<main class="vet-info_section">
    <div class="vet-info_details">
        <div class="vet-info_header">
            <h2 class="vet-name bold-txt blue">[Vet Name]</h2>
            <span class="vet-specialty yellow-badge">[Specialty]</span>
        </div>
        
        <div class="vet-experience">
            <h3 class="experience-title bold-txt blue">Experience:</h3>
            <div class="experience-details">
                <span class="experience-icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/circle-icon.svg" alt="Circle Icon">
                </span>
                <span class="experience-text">[Experience Details]</span>
            </div>
        </div>            
        
        <div class="appointment-selection">
            <div class="visit-date">
                <h3 class="selection-title bold-txt blue">Select a visit date:</h3>
                <div class="calendar-container">
                    <div class="calendar-header">
                        <button class="prev-month" aria-label="Previous Month">&lt;</button>
                        <span class="calendar-month">September</span>
                        <button class="next-month" aria-label="Next Month">&gt;</button>
                    </div>
                    <table class="calendar">
                        <thead>
                            <tr>
                                <th>Sun</th>
                                <th>Mon</th>
                                <th>Tue</th>
                                <th>Wed</th>
                                <th>Thu</th>
                                <th>Fri</th>
                                <th>Sat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="disabled">26</td>
                                <td class="disabled">27</td>
                                <td class="disabled">28</td>
                                <td class="disabled">29</td>
                                <td class="disabled">30</td>
                                <td class="disabled">31</td>
                                <td class="date-slot">1</td>
                            </tr>        
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="visit-time">
                <h3 class="selection-title bold-txt blue">Select a visit time:</h3>
                <div class="time-slots">
                    <button class="time-slot">08:30</button>
                    <button class="time-slot">09:30</button>
                    <button class="time-slot">10:30</button>
                    <button class="time-slot">11:30</button>
                    <button class="time-slot">12:30</button>
                    <button class="time-slot">13:30</button>
                    <button class="time-slot">14:30</button>
                    <button class="time-slot">15:30</button>
                    <button class="time-slot">16:30</button>
                    <button class="time-slot">17:30</button>
                    <button class="time-slot">18:30</button>
                    <button class="time-slot">19:30</button>
                </div>
            </div>
        </div>
        
        <button type="button" class="schedule-button blue-button">Schedule</button>
    </div>

    <div class="vet-image-container">
        <?php 
        $images = [
            "Oleksandra Kovalenko" => "oleksandra-kovalenko-info.svg",
            "Nataliia Shevchenko" => "nataliia-shevchenko-info.svg",
            "Viktoriia Ivanchuk" => "viktoriia-ivanchuk-info.svg",
            "Mykola Romanenko" => "mykola-romanenko-info.svg",
            "Iryna Kovalenko" => "iryna-kovalenko-info.svg",
            "Nataliia Marchenko" => "natalia-marchenko-info.svg",
            "Andrii Melnyk" => "andrii-melnyk-info.svg",
            "Yuliia Hrytsenko" => "yuliia-hrytsenko-info.svg",
            "Dmytro Bondarenko" => "dmytro-bondarenko-info.svg",
            "Anastasiia Berezhko" => "anastasiia-berezhko-info.svg",
            "Alina Radchenko" => "alina-radchenko-info.svg",
            "Yurii Staryk" => "yurii-staryk-info.svg",
            "Sofiia Dovhal" => "sofiia-dovhal-info.svg",
            "Mykola Leshchenko" => "mykola-leshchenko-info.svg",
            "Olha Tyshchenko" => "olha-tyshchenko-info.svg",
            "Liliia Kovalchuk" => "liliia-kovalchuk-info.svg",
            "Viktoriia Havryliuk" => "viktoriia-havryliuk-info.svg",
            "Volodymyr Chumak" => "volodymyr-chumak-info.svg",
            "Oleksandr Myronenko" => "oleksandr-myronenko-info.svg",
            "Bohdan Poltavets" => "bohdan-poltavets-info.svg",
            "Ihor Klymenchuk" => "ihor-klymenchuk-info.svg",
            "Diana Horbachuk" => "diana-horbachuk-info.svg",
            "Serhii Lysenko" => "serhii-lysenko-info.svg",
            "Nataliia Levchuk" => "nataliia-levchuk-info.svg",
            "Kateryna Vasylenko" => "kateryna-vasylenko-info.svg",
            "Andrii Zadorozhnyi" => "andrii-zadorozhnyi-info.svg",
            "Maksym Savchenko" => "maksym-savchenko-info.svg"
        ];

        foreach ($images as $name => $file) {
            echo '<img src="' . get_stylesheet_directory_uri() . '/public/images/vet-info/' . $file . '" alt="' . $name . '" class="vet-photo" data-vet="' . $name . '" style="display: none;">';
        }
        ?>
    </div>

</main>

<div class="schedule-overlay"></div>

<section id="appointment-confirmation" class="confirmation-section">
    <div class="confirmation-container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/checkmark-icon.svg" alt="Checkmark Icon" class="confirmation-icon">
        <h2 class="confirmation-title">Your appointment has been booked!</h2>
        <p class="confirmation-message">You can go to your profile to view the details of your visit.</p>
        <button type="button" class="confirm-button blue-button">My Profile</button>
    </div>
</section>

<div class="overlay"></div>

<?php
get_footer();
?>