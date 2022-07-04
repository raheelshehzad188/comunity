<head>
   <link rel="stylesheet" type="text/css" href="https://ads.strokedev.net/template/front/js/owl.carousel.css">
</head>


<?php
                                            $top_banner     =  $this->db->get_where('ui_settings',array('ui_settings_id' => '62'))->row();
                                            if($top_banner)
                                            {
                                             $img = $this->crud_model->get_img($top_banner->value)->secure_url;
                                         }

                                        ?>
<div class="main_wrap" style="background: url(<?= $img; ?>);">
    <div class="container">
        <div class="arrowbox">
            <img class="textbox" src="https://ads.strokedev.net/uploads/logo_image/h1-slider-img-1.png" alt="">
            <img class="arrow_box" src="https://ads.strokedev.net/uploads/logo_image/h1-slider-img-2.png" alt="">
        </div>        
        <div class="menu_items">
            <ul>
                <?php
                $categories =json_decode($this->db->get_where('ui_settings',array('ui_settings_id' => 35))->row()->value,true);
                                            $result=array();
                                            foreach($categories as $row){
                                                if($this->crud_model->if_publishable_category($row)){
                                                    $result[]=$row;
                                                }
                                            }

                    foreach ($brands as $key => $value) {
                        if(in_array($value['category_id'], $result))
                        {
                        ?>
                        <li>
                    <a href="<?= base_url('home/category/'.$value['category_id']); ?>">
                        <i class="fa <?= ($value['fa_icon'])?$value['fa_icon']:'fa-file-image-o'; ?>"></i>
                        <?= $value['category_name'] ?>
                    </a>
                </li>

                        <?php
                        }
                    }
                ?>
            </ul>
        </div>
        <div class="searchform">
             <form action="<?= base_url('/home/text_search'); ?>"  onkeyup="submitForm(event)" oninput="submitForm(event)" method="post">
            <input type="search" id="home-search" name="query" placeholder="Search..." value="" class="searchbox" autocomplete="off" spellcheck="false" autocorrect="off" autocapitalize="off" aria-label="Search">
                <button type="submit">Search places <i class="fa fa-angle-right"></i> </button>
           </form>
        </div>
    </div>
    <div class="elementor-shape elementor-shape-bottom_2" data-negative="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
    <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
    c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
    c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
</svg>      </div>
</div>


<div class="whychose">
    <div class="container">
        <div class="whychose_info">
            <h1><?php echo $this->crud_model->get_type_name_by_id('ui_settings','63','value'); ?></h1>
            <p><?php echo $this->crud_model->get_type_name_by_id('ui_settings','64','value'); ?></p>
        </div>
        <div class="row">
            <?php
                $cboxes = unserialize($this->crud_model->get_type_name_by_id('ui_settings','65','value'));
                                    $boxes = 3;
                                    if($cboxes)
                                    {
                                        // $cboxes = unserialize($cboxes);

                                        // var_dump($cboxes);
                                        $boxes = count($cboxes);
                                    }

                                    for ($i=0; $i < $boxes; $i++) { 
                                        ?>
            <div class="col-sm-4 sidegapp">
                <div class="inner_boxes">
                    <i class="fa <?= (isset($cboxes[$i]['icon'])?$cboxes[$i]['icon']:''); ?>" aria-hidden="true"></i>

                    <b><?= (isset($cboxes[$i]['heading'])?$cboxes[$i]['heading']:''); ?></b>
                    <p><?= (isset($cboxes[$i]['detail'])?$cboxes[$i]['detail']:''); ?></p>
                </div>
            </div>
            <?php

                                    }
            ?>
        </div>
    </div>
</div>



<div class="whychose">
    <div class="container">
        
        <div class="row">
            <div class="col-sm-6 cashon_delivery">
                <h4>COMMUNITY HUBLAND DIGITAL SERVICES</h4>
                <h3>Professional Business Solutions Designed For You</h3>
                <p>Hire our experienced team of programmers, digital designers, and marketing professionals, who know how to deliver results. With your requirements, we will help you identify your needs to reach solutions</p>
                <ul>
                    <li><i class="fa fa-check"></i> WEB & ENTERPRISE PORTALS - Incredible UX and compelling functionality under the hood</li>
                    <li><i class="fa fa-check"></i> ECOMMERCE DEVELOPMENT - Fully customized eCommerce solution for your online store</li>
                    <li><i class="fa fa-check"></i> GRAPHICS ANALYSIS - Solutions empowered with computer Graphic Designing</li>
                </ul>
                <a href="#">Our Projects</a>
            </div>
            <div class="col-sm-6 delivery_img">
                <?php
                                    $img = '';
                                            $top_banner     =  $this->db->get_where('ui_settings',array('ui_settings_id' => '66'))->row();
                                            if($top_banner)
                                            {
                                             $img = $this->crud_model->get_img($top_banner->value)->secure_url;
                                         }

                                        ?>
                <img src="<?= $img ?>" alt="">
            </div>
        </div>

        
    </div>
</div>

<?php
                                            $top_banner     =  $this->db->get_where('ui_settings',array('ui_settings_id' => '67'))->row();
                                            if($top_banner)
                                            {
                                             $img = $this->crud_model->get_img($top_banner->value)->secure_url;
                                         }

                                        ?>
<div class="reach_wrap" style="background: #a51010ad url(<?= $img ?>);">
    <div class="elementor-shape elementor-shape-top" data-negative="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
    <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
    c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
    c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
</svg>      </div>
    <div class="container">
        <div class="reach_box">
            <h3><?php echo $this->crud_model->get_type_name_by_id('ui_settings','69','value'); ?></h3>
            <p><?php echo $this->crud_model->get_type_name_by_id('ui_settings','68','value'); ?></p>
        </div>
    </div>
    <div class="elementor-shape elementor-shape-bottom" data-negative="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
    <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
    c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
    c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
</svg>      </div>
</div>

<div class="whychose">
    <div class="container">
        
        

        <div class="row padtop">

<?php
                                            $top_banner     =  $this->db->get_where('ui_settings',array('ui_settings_id' => '70'))->row();
                                            if($top_banner)
                                            {
                                             $img = $this->crud_model->get_img($top_banner->value)->secure_url;
                                         }

                                        ?>
            <div class="col-sm-6 delivery_img left_deliverybox">
                <img src="<?= $img ?>" alt="">
            </div>
            <div class="col-sm-6 cashon_delivery">
                <h4>ADVERTISE ON COMMUNITY HUBLAND DIRECTORY SITE</h4>
                <h3>Advertise your professional business on Community HubLand directory site</h3>
                <p>Reach larger interested audience with a digital presence that manage, monitor and consolidate all your business in one place. Get started with us and receive:</p>
                <ul>
                    <li><i class="fa fa-check"></i> ADVERTISEMENT SPOT - Get listed on main directory site under your industry</li>
                    <li><i class="fa fa-check"></i> WEB PAGE - You will be provided a web page where you can list more information about your business</li>
                    <li><i class="fa fa-check"></i> AFFILIATE - Become an affiliate and earn great rewards</li>
                </ul>
                <a href="#">Advertise with Us</a>
            </div>
        </div>
    </div>
</div>


<div class="listing_wrap">
    <div class="container">
        <div class="listing_info">
            <h4>Verified Listings</h4>
            <p>Explore and contact businesses directly with no obligation</p>
        </div>
        <?php
            include "featured_products.php";
        ?>

        


        
    </div>
</div>


 <script src="https://ads.strokedev.net/template/front/js/jquery-3.2.1.min.js"></script>
         <script src="https://ads.strokedev.net/template/front/js/owl.carousel.js"></script>
          <script src="https://ads.strokedev.net/template/front/js/custom.js"></script>