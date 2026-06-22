<?php 
$id = get_the_id(); 
$site_logo = get_field('site_logo', 'options'); 
$image_alt = get_post_meta($site_logo, '_wp_attachment_image_alt', TRUE);
$site_name = get_site_option('blogname'); 
$header_nav_phone_number = get_field('header_nav_phone_number', 'options');
$header_phone_number = get_field('header_phone_number', $id);

?>


<header id="site-header" class="site-header">
  <div class="site-header-container container">
    <div class="site-header-row row align-items-center">
      <!-- Shared Logo -->
      <div class="site-header-logo-col col">
        <div class="site-brand-logo-wrapper d-flex">
          <?php include(locate_template('components/header-navigation/partials/header-logo.php')); ?>
        </div>
      </div>
      <!-- Desktop Menu -->
      <div class="header-menu-col col-sm-7 d-none d-lg-block">
        <?php include(locate_template('components/header-navigation/partials/header-menu.php')); ?>
      </div>
      <div class="header-menu-col-phone col-sm-3">
          <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $header_phone_number ? $header_phone_number : $header_nav_phone_number); ?>"
            aria-label="Call us at <?php echo esc_attr($header_phone_number ? $header_phone_number : $header_nav_phone_number); ?>">
              <?php echo esc_html($header_phone_number ? $header_phone_number : $header_nav_phone_number); ?>
          </a>
      </div>









      <!-- Mobile Hamburger & Slide-Out Menu -->
      <div class="site-header-mobile-button-col col-2 ms-auto d-lg-none">
        <div class="mobile-menu-wrapper">
          <div class="hamburger-menu d-flex justify-content-end">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>
            <?php include(locate_template('components/header-navigation/partials/header-menu.php')); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
