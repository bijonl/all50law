<div class="location-hero-callout-wrapper d-xl-flex">
    <div class="address-wrapper d-flex align-items-center">
        <i class="fa-solid fa-location-dot"></i>
        <?php echo $address_one ?>, <?php echo $address_two ?><br>
        <?php echo $city ?>, <?php echo $state ?> <?php echo $zip_code ?>
    </div>
    <div class="phone-wrapper d-flex align-items-center">
        <a href="tel:<?php echo $phone_number ?>">
            <i class="fa-solid fa-phone"></i>
            <?php echo $phone_number ?>
        </a>
    </div>
</div>