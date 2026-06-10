<div class="prof-creds-wrapper">
    <div class="prof-image-wrapper">
        <?php echo wp_get_attachment_image($featured_image_id, 'full', false, array('class' => 'w-100 h-auto')) ?>
    </div>
    <div class="prof-name-wrapper">
        <h3><?php echo $prefix ? $prefix : '' ?> <?php echo $first_name ?></h3>
        <h3><?php echo $middle_name ?></h3>
        <h3><?php echo $last_name ?> <?php echo $suffix ? $suffix : '' ?></h3>
    </div>
    <div class="prof-position-wrapper">
    <p class="mb-0"><?php echo $position_string ?></p>
    </div>
   <div class="position-contact-wrapper d-flex flex-column">

        <?php if ($office_crosslinks) { 
            $count = 0; ?>
            <?php foreach ($office_crosslinks as $office) { 
                $count++;
                ?>
                <?php $office_title = get_the_title($office->ID); ?>
                <a
                    href="<?php echo esc_url(get_permalink($office->ID)); ?>"
                    class="contact-info location"
                    aria-label="View office details for <?php echo esc_attr($office_title); ?>"
                >
                    <i class="fa-solid fa-location-arrow" aria-hidden="true"></i>
                    <span><?php echo esc_html($office_title); ?></span>
                </a>
                <?php if($count === 1) {
                    break; 
                } ?>
            <?php }; ?>
        <?php }; ?>

        <?php if ($phone_number) { ?>
            <a
                href="tel:<?php echo preg_replace('/[^0-9+]/', '', $phone_number); ?>"
                class="contact-info phone"
                aria-label="Call <?php echo esc_attr($phone_number); ?>"
            >
                <i class="fa-solid fa-phone" aria-hidden="true"></i>
                <span><?php echo esc_html($phone_number); ?></span>
            </a>
        <?php }; ?>

        <?php if ($professional_email) { ?>
            <?php $email = antispambot($professional_email); ?>

            <a
                href="mailto:<?php echo esc_attr($email); ?>"
                class="contact-info email"
                aria-label="Email <?php echo esc_attr($professional_email); ?>"
            >
                <i class="fa-solid fa-at" aria-hidden="true"></i>
                <span><?php echo esc_html($email); ?></span>
            </a>
        <?php }; ?>
    </div>
    <?php if(have_rows('education')) { ?>

        <div class="prof-edu-wrapper">
            <h4 class="h6 mb-4">Education</h4> 
            <ul class="list-unstyled mb-0 ms-0">
            <?php while(have_rows('education')) {
                the_row(); 
                $school = get_sub_field('education_name'); 
                $degree = get_sub_field('degree'); 
                $year = get_sub_field('year'); 

                $school_term = get_term_by('term_id', $school, 'education'); 
                $degree_term = get_term_by('term_id', $degree, 'degrees'); 

                $education_string = $school_term->name;
                $education_string .= ', '; 
                $education_string .= $degree_term->name;
                $education_string .= '<br>'; 
                $education_string .= $year; ?>
                <li>
                    <?php echo $education_string; ?>
                </li>





            <?php } ?>
            </ul>


        </div>

    <?php } ?>
   

</div>