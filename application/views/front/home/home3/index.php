
<style type="text/css">
	.owl-carousel {
    display: block;
}
</style>
<div class="bannerSearch">
    <!-- <h1>Buy & Sell <br><span>What's Now & Next</span></h1> -->
    <div class="brands">
    	<ul>
    <?php
    foreach ($brands as $key => $value) {
    	?>
    	<li>
    	<a href="<?= base_url('/home/text_search'); ?>?list_type=<?= $value['brand_id'] ?>">
    	<i class="fa <?= $value['fa_icon'] ?>" aria-hidden="true"></i>
    	<h4><?= $value['name'] ?></h4>
    </a>
    </li>

    	<?php
    }
    ?>
</ul>
</div>
    <form action="<?= base_url('/home/text_search'); ?>" id="srch_form" onkeyup="submitForm(event)" oninput="submitForm(event)" method="post">
        <input type="search" id="home-search" name="query" placeholder="Search..." value="" class="searchbox" autocomplete="off" spellcheck="false" autocorrect="off" autocapitalize="off" aria-label="Search">
        <svg viewBox="0 0 512 512" focusable="false" class="chakra-icon css-17jqirj" aria-hidden="true"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
        
    </form>
</div>
<?php 
	if($this->crud_model->get_type_name_by_id('general_settings','62','value') == 'ok'){

 		include 'category_menu.php';

	}

?>

<?php 
	include 'top_banner.php';
	//include 'categories.php';
	include 'latest_products.php';
	
	

?>

<?php

	if($this->crud_model->get_type_name_by_id('ui_settings','24','value') == 'ok'){

// 		include 'featured_products.php';

	}

?>



