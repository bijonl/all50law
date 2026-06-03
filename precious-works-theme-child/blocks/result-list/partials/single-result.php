
<div class="single-result-wrapper">
    <div class="single-result-content-wrapper">   
        <div class="single-result-money-wrapper">
            <h5 class="money-heading color-primary h6">
                <?php echo '$' . number_format((float) $reward_money, 0); ?>
            </h5>        
        </div>   
        
        <div class="single-result-meta-wrapper pt-4">
            <div class="single-result-name-wrapper">
                <h6 class="name-heading"><?php echo $case_name ?><h6>
            </div>
            <div class="single-result-location-year-wrapper d-flex">
                <p><?php echo $case_location ?><p> 
                <p><?php echo '~' ?><p> 
                <p><?php echo $results_year ?><p>
            </div>
        </div>
    </div>
</div>
