<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// 🔧 Define theme version
$theme = wp_get_theme();
define( 'PW_THEME_CHILD_VERSION', $theme->get( 'Version' ) );

require_once get_stylesheet_directory() . '/includes/custom-post-types/practices.php';
require_once get_stylesheet_directory() . '/includes/custom-post-types/professionals.php';
require_once get_stylesheet_directory() . '/includes/custom-post-types/locations.php';
require_once get_stylesheet_directory() . '/includes/taxonomies/admissions.php';
require_once get_stylesheet_directory() . '/includes/taxonomies/courts.php';
require_once get_stylesheet_directory() . '/includes/taxonomies/degrees.php';
require_once get_stylesheet_directory() . '/includes/taxonomies/positions.php';
require_once get_stylesheet_directory() . '/includes/taxonomies/states.php';
require_once get_stylesheet_directory() . '/includes/taxonomies/education-type.php';





function pw_enqueue_scripts() {
    wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/assets/dist/css/style.min.css', [], PW_THEME_CHILD_VERSION );

    // Then enqueue child style, dependent on parent-style
    // wp_enqueue_style( 'pw-style', get_stylesheet_directory_uri() . '/assets/dist/css/style.min.css', ['parent-style'], PW_THEME_CHILD_VERSION );
    
    // JS if needed
    wp_enqueue_script( 'pw-main', get_stylesheet_directory_uri()  . '/assets/js/main.js', [], PW_THEME_CHILD_VERSION, true );

      // Font Awesome 6 CDN (replace with your preferred version if needed)
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css',
        [],
        '6.5.0'
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.8',
        true
    );
}

function pw_enqueue_glightbox_assets() {
    wp_enqueue_style('glightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css');
    wp_enqueue_script('glightbox', 'https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js', array(), null, true);

    // Optionally initialize after DOM loads
    wp_add_inline_script('glightbox', 'document.addEventListener("DOMContentLoaded", function() { GLightbox({ selector: ".glightbox" }); });');
}

add_action('wp_enqueue_scripts', 'pw_enqueue_glightbox_assets');
add_action( 'wp_enqueue_scripts', 'pw_enqueue_scripts', 20 );
add_action( 'enqueue_block_editor_assets', 'pw_enqueue_scripts' );

/**
 * Enqueue Google Fonts (Inter + Georgia fallback stack)
 */
function theme_enqueue_fonts() {

    // Inter from Google Fonts
    wp_enqueue_style(
        'theme-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap',
        array(),
        null
    );

}
add_action('wp_enqueue_scripts', 'theme_enqueue_fonts');


function disable_gutenberg_for_professionals($use_block_editor, $post_type) {

    if ($post_type === 'professionals') {
        return false;
    }

    return $use_block_editor;
}

add_filter(
    'use_block_editor_for_post_type',
    'disable_gutenberg_for_professionals',
    10,
    2
);


function theme_enqueue_glide_styles() {
      // Glide CSS
    wp_enqueue_style(
        'glide-core',
        'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.core.min.css',
        array(),
        '3.6.0'
    );

    wp_enqueue_style(
        'glide-theme',
        'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/css/glide.theme.min.css',
        array('glide-core'),
        '3.6.0'
    );

    // Glide JS
    wp_enqueue_script(
        'glide-js',
        'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.6.0/glide.min.js',
        array(),
        '3.6.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'theme_enqueue_glide_styles');


// add_action('admin_init', function () {

//     $taxonomy = 'states';

//     $states = [
//         'Alabama' => 'AL',
//         'Alaska' => 'AK',
//         'Arizona' => 'AZ',
//         'Arkansas' => 'AR',
//         'California' => 'CA',
//         'Colorado' => 'CO',
//         'Connecticut' => 'CT',
//         'Delaware' => 'DE',
//         'Florida' => 'FL',
//         'Georgia' => 'GA',
//         'Hawaii' => 'HI',
//         'Idaho' => 'ID',
//         'Illinois' => 'IL',
//         'Indiana' => 'IN',
//         'Iowa' => 'IA',
//         'Kansas' => 'KS',
//         'Kentucky' => 'KY',
//         'Louisiana' => 'LA',
//         'Maine' => 'ME',
//         'Maryland' => 'MD',
//         'Massachusetts' => 'MA',
//         'Michigan' => 'MI',
//         'Minnesota' => 'MN',
//         'Mississippi' => 'MS',
//         'Missouri' => 'MO',
//         'Montana' => 'MT',
//         'Nebraska' => 'NE',
//         'Nevada' => 'NV',
//         'New Hampshire' => 'NH',
//         'New Jersey' => 'NJ',
//         'New Mexico' => 'NM',
//         'New York' => 'NY',
//         'North Carolina' => 'NC',
//         'North Dakota' => 'ND',
//         'Ohio' => 'OH',
//         'Oklahoma' => 'OK',
//         'Oregon' => 'OR',
//         'Pennsylvania' => 'PA',
//         'Rhode Island' => 'RI',
//         'South Carolina' => 'SC',
//         'South Dakota' => 'SD',
//         'Tennessee' => 'TN',
//         'Texas' => 'TX',
//         'Utah' => 'UT',
//         'Vermont' => 'VT',
//         'Virginia' => 'VA',
//         'Washington' => 'WA',
//         'West Virginia' => 'WV',
//         'Wisconsin' => 'WI',
//         'Wyoming' => 'WY',
//     ];

//     foreach ($states as $state_name => $abbreviation) {

//         $term = term_exists($state_name, $taxonomy);

//         if (!$term) {
//             $term = wp_insert_term($state_name, $taxonomy);

//             if (is_wp_error($term)) {
//                 continue;
//             }

//             $term_id = $term['term_id'];
//         } else {
//             $term_id = is_array($term) ? $term['term_id'] : $term;
//         }

//         // ACF term meta field.
//         update_field(
//             'state_abbreviation',
//             $abbreviation,
//             $taxonomy . '_' . $term_id
//         );

//         // Optional native WP term meta.
//         update_term_meta(
//             $term_id,
//             'state_abbreviation',
//             $abbreviation
//         );
//     }

//     wp_die('States imported successfully.');
// });