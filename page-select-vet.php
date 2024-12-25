<?php
/*
Template Name: Select Vet Page
*/
get_header();
?>

<main class="vet-selection">
    <div class="vet-selection_header">
        <h2 class="vet-service_title blue">Search for a service: <span class="service-name">Grooming</span></h2>
        <h3 class="vet-selection_title bold-txt blue">Select a Veterinarian</h3>
    </div>
    <div class="vet-list">
        <?php 
        $vets = [
            ["name" => "Oleksandra Kovalenko", "specialty" => "Grooming Specialist for Small Dogs", "service" => "grooming", "image" => "oleksandra-kovalenko.svg"],
            ["name" => "Nataliia Shevchenko", "specialty" => "Grooming Specialist for Cats and Exotic Pets", "service" => "grooming", "image" => "nataliia-shevchenko.svg"],
            ["name" => "Viktoriia Ivanchuk", "specialty" => "Grooming Specialist for Large Dogs", "service" => "grooming", "image" => "viktoriia-ivanchuk.svg"],

            ["name" => "Mykola Romanenko", "specialty" => "Specialist in Canine and Feline Vaccinations", "service" => "vaccinations", "image" => "mykola-romanenko.svg"],
            ["name" => "Iryna Kovalenko", "specialty" => "Exotic Pet Vaccination Specialist", "service" => "vaccinations", "image" => "iryna-kovalenko.svg"],
            ["name" => "Nataliia Marchenko", "specialty" => "Rabies and General Immunization Expert", "service" => "vaccinations", "image" => "natalia-marchenko.svg"],

            ["name" => "Andrii Melnyk", "specialty" => "Veterinary Dental Surgeon", "service" => "dentistry", "image" => "andrii-melnyk.svg"],
            ["name" => "Yuliia Hrytsenko", "specialty" => "Specialist in Pet Dental Hygiene", "service" =>  "dentistry", "image" => "yuliia-hrytsenko.svg"],
            ["name" => "Dmytro Bondarenko", "specialty" => "Oral Health Specialist for Small Animals", "service" =>  "dentistry", "image" => "dmytro-bondarenko.svg"],

            ["name" => "Anastasiia Berezhko", "specialty" => "Veterinary Anesthesiologist", "service"  => "anesthesia", "image" => "anastasiia-berezhko.svg"],
            ["name" => "Alina Radchenko", "specialty" => "Specialist in Animal Anesthesia", "service" => "anesthesia", "image" => "alina-radchenko.svg"],
            ["name" => "Yurii Staryk", "specialty" => "Small Animal Anesthesiology Expert", "service" => "anesthesia", "image" => "yurii-staryk.svg"],

            ["name" => "Sofiia Dovhal", "specialty" => "Veterinary Dermatologist", "service" => "veterinarydermatology", "image" => "sofiia-dovhal.svg"],
            ["name" => "Mykola Leshchenko", "specialty" => "Specialist in Animal Skin Care", "service" => "veterinarydermatology", "image" => "mykola-leshchenko.svg"],
            ["name" => "Olha Tyshchenko", "specialty" => "Expert in Veterinary Dermatology", "service" => "veterinarydermatology", "image" => "olha-tyshchenko.svg"],

            ["name" => "Liliia Kovalchuk", "specialty" => "Veterinary Radiologist", "service" => "diagnosticservices", "image" => "liliia-kovalchuk.svg"],
            ["name" => "Viktoriia Havryliuk", "specialty" => "Veterinary Pathologist", "service" => "diagnosticservices", "image" => "viktoriia-havryliuk.svg"],
            ["name" => "Volodymyr Chumak", "specialty" => "Veterinary Ultrasonographer", "service" => "diagnosticservices", "image" => "volodymyr-chumak.svg"],
            
            ["name" => "Oleksandr Myronenko", "specialty" => "Animal Identification Expert", "service" => "petmicrochipping", "image" => "oleksandr-myronenko.svg"],
            ["name" => "Bohdan Poltavets", "specialty" => "Veterinary Microchipping Specialist", "service" => "petmicrochipping", "image" => "bohdan-poltavets.svg"],
            ["name" => "Ihor Klymenchuk", "specialty" => "Veterinary Technician", "service" => "petmicrochipping", "image" => "ihor-klymenchuk.svg"],

            ["name" => "Diana Horbachuk", "specialty" => "Veterinary Oncologist", "service" => "oncologytreatment", "image" => "diana-horbachuk.svg"],
            ["name" => "Serhii Lysenko", "specialty" => "Veterinary Radiation Oncologist", "service" => "oncologytreatment", "image" => "serhii-lysenko.svg"],
            ["name" => "Nataliia Levchuk", "specialty" => "Veterinary Surgical Oncologist", "service" => "oncologytreatment", "image" => "nataliia-levchuk.svg"],

            ["name" => "Kateryna Vasylenko", "specialty" => "Veterinary Surgeon", "service" => "animalsurgery", "image" => "kateryna-vasylenko.svg"],
            ["name" => "Andrii Zadorozhnyi", "specialty" => "Veterinary Orthopedic Surgeon", "service" => "animalsurgery", "image" => "andrii-zadorozhnyi.svg"],
            ["name" => "Maksym Savchenko", "specialty" => "Veterinary Soft Tissue Surgeon", "service" => "animalsurgery", "image" => "maksym-savchenko.svg"],
        ];

        foreach ($vets as $vet) :
        ?>
        <div class="vet-card <?php echo $vet['service']; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/select-vet/<?php echo $vet['image']; ?>" alt="<?php echo $vet['name']; ?>" class="vet-image">
            <h4 class="vet-name bold-txt blue"><?php echo $vet['name']; ?></h4>
            <p class="vet-specialty"><?php echo $vet['specialty']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<?php get_footer(); ?>
