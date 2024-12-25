<?php
/*
Template Name: Profile Page
*/
get_header();
?>

<main class="profile-section">
    <div class="profile-header">
        <h2 class="profile-title bold-txt blue">My Profile</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/logout-icon.svg" alt="Logout" class="logout-icon" title="Logout">
    </div>
    <div class="visit-history">
        <h3 class="visit-history_title bold-txt">Visit History</h3>
        <div class="visit-history_content">
            <div class="visit-history_filter">
                <button class="order-history_button blue">
                    Online Order History
                    <span class="arrow">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/icons/arrow-right.svg" alt="Arrow Icon" />
                    </span>
                </button>
            </div>
            <div class="order-history_details">
                <h4 class="order-history_title bold-txt">Online Order History</h4>
                <div class="appointment-entry">
                    <p class="service-type">Grooming</p>
                    <p class="vet-name bold-txt blue">Oleksandra Kovalenko</p>
                    <div class="appointment-info">
                        <span class="status-badge blue">Scheduled</span>
                        <span class="appointment-time">
                            <span class="profile-clock_icon-dot"></span>
                            September 11, 12:30
                        </span>
                    </div>
                </div>
            </div>
            <div class="history-dropdown">
                <select id="history-period" name="history-period" class="blue">
                    <option value="all">Show all</option>
                    <option value="3-months">Next 3 months</option>
                    <option value="6-months">Next 6 months</option>
                    <option value="1-year">Next 1 year</option>
                </select>
            </div>
        </div>
    </div>
</main>

<div class="overlay"></div>

<?php
get_footer();
?>
