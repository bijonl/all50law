<?php
$related_results = get_field('related_results');
$attorney_disclaimer = get_field('attorney_disclaimer', 'options');

if ($related_results) {
?>

<section class="results-section" id="result-table" aria-labelledby="results-heading">
    <div class="results-container container">

        <h2 class="h2" id="results-heading">Recent Wins</h2>

        <div class="table-responsive">
            <table class="table results-table">
                <caption class="visually-hidden">
                    Representative case results
                </caption>

                <thead>
                    <tr>
                        <th scope="col">Case Name</th>
                        <th scope="col">Results</th>
                        <th scope="col">Practice Area</th>
                        <th scope="col">Year</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($related_results as $related_result) {

                        $result_id = $related_result->ID;
                        include locate_template('components/variables/result-variables.php');
                        $practice_area_name = '';

                        if ($practices) {
                            $practice_names = [];

                            foreach ($practices as $practice) {
                                $practice_names[] = get_the_title($practice->ID);
                            }

                            $practice_area_name = implode(', ', $practice_names);
                        }
                    ?>
                        <tr>
                            <th scope="row">
                                <?php echo esc_html($case_name); ?>
                            </th>

                            <td>
                                <?php echo '$' . number_format((float) $reward_money, 0); ?>
                            </td>

                            <td>
                                <?php echo esc_html($practice_area_name); ?>
                            </td>

                            <td>
                                <?php echo esc_html($results_year); ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <?php if ($attorney_disclaimer) { ?>
            <p class="disclaimer-text mt-2">
                <?php echo wp_kses_post($attorney_disclaimer); ?>
            </p>
        <?php } ?>

    </div>
</section>

<?php } ?>