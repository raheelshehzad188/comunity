
<style type="text/css">
	.owl-carousel {
    display: block !important;
}
.category_menu .main-slider-row .owl-stage-outer, .category_menu .main-slider-row .owl-stage, .category_menu .main-slider-row .owl-item, .category_menu .main-slider-row .item, .category_menu .owl-carousel .owl-item img {
    min-height: 100vh !important;
    object-fit: cover;
}   
.navbar-nav-items li a {
    color: #fff;
}
.brands {
    text-align: center;
    padding: 70px 0 17px;
}       
.brands ul li {
    display: inline-block;
    padding: 0 24px;
        transition: transform .35s cubic-bezier(.38,3,.57,1.6);
}
.brands i {
        transition: transform .35s cubic-bezier(.38,3,.57,1.6);
    color: #fff;
    display: block;
    font-size: 44px;
}       
.brands h4 {
    color: #fff;
    margin: 16px 0 6px;
    font-size: 16px;   
    font-weight: 600 !important; 
}
.brands ul li:hover i {
    -webkit-transform: translate3d(0,-4px,0);
    -moz-transform: translate3d(0,-4px,0);
    transform: translate3d(0,-4px,0);
}
.bannerSearch form .chakra-icon.css-17jqirj {
    left: auto;
    top: 0;
    right: 0;
    background: #f16f22;
    padding: 15px 13px;
    width: 52px;
}
.searchplace{
    padding-top: 25px;
    text-align: center;
}
.searchplace button {
    background: #f16f22;
    color: #fff;
    padding: 14px 39px;
    font-size: 17px;
    border: none;
    border-radius: 33px;
}   
.bannerSearch form #home-search {   
    padding: 15px 15px 15px 0px;
}

/*header right*/

.navbar-nav-items li a {
    font: inherit;
}
.add_listing {
    text-align: right;
    padding: 12px 0 0;
}  

.add_listing ul {
    margin: 0;
}
.add_listing ul li {
    display: inline-block;
    padding: 0 5px;
}   
.add_listing ul li a i {
    vertical-align: middle;
}  
.stickyheader ul li a{
    color: #000;        
}
.stickyheader .add_listing {
    padding: 1px 0 0;
}
.stickyheader  .navbar_items {
    padding: 5px 0;
    text-align: left;
}
.cart-wrapper a{
        color: #fff;
    font-size: 15px;                
}
.navbar_items {
    padding: 10px 0;
    text-align: left;
}   
.navbar-nav-items li a {
    font-size: 16px !important;
} 
.add_listing ul li .add_listing_btn {
    background: #f16522;
    padding: 10px 22px;
    color: #fff;
    display: inline-block;
    border-radius: 33px;
    font-size: 14px;
}
.add_listing .user_info {
    background: #fff;
    color: #000;
    width: 36px;
    height: 36px;
    display: inline-block;
    text-align: center;
    border-radius: 100%;
    padding: 0;
    font-size: 21px;
}   
</style>
<div class="bannerSearch">
    <!-- <h1>Buy & Sell <br><span>What's Now & Next</span></h1> -->
    <div class="brands">
    	<ul>
    <?php
    foreach ($brands as $key => $value) {
        if($key <=5)
        {
    	?>
    	<li>
    	<a href="<?= base_url('/home/text_search'); ?>?list_type=<?= $value['brand_id'] ?>">
    	<i class="fa <?= $value['fa_icon'] ?>" aria-hidden="true"></i>
    	<h4><?= $value['name'] ?></h4>
    </a>
    </li>

    	<?php
    }
    }
    ?>
</ul>
</div>
    <form action="<?= base_url('/home/text_search'); ?>" id="srch_form" onkeyup="submitForm(event)" oninput="submitForm(event)" method="post">
        <input type="search" id="home-search" name="query" placeholder="Search..." value="" class="searchbox" autocomplete="off" spellcheck="false" autocorrect="off" autocapitalize="off" aria-label="Search">
        <svg viewBox="0 0 512 512" focusable="false" class="chakra-icon css-17jqirj" aria-hidden="true"><path fill="#fff" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
    </form>
       <div class="searchplace">
            <button type="button">Search places </button>
       </div>
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



