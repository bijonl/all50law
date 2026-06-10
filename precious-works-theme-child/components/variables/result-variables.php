<?php 
$case_name = get_field('case_name', $result_id) ? get_field('case_name', $result_id) : get_the_title($result_id); 
$results_year = get_field('results_year', $result_id);
$practices = get_field('practices', $result_id);
$reward_money = get_field('reward_money', $result_id);
$case_location = get_field('case_location', $result_id);
$practices = get_field('practices', $result_id);
?>