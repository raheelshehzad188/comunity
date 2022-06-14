<?php

$cat = $this->db->where('category_id',$category)->get('category')->row();
$brand = $this->db->where('brand_id',$brand)->get('brand')->row();

// print_r($cat->category_name);

?>

<div class="col-md-12 col-sm-12">

	      <div class="product-col product-wq_onimage post-1131 product">

	        <div class="product-inner">

	            <div class="product-image">

	              <div class="add_tocart forbrand">

	                  <a href="#">
	                      <?php

	                    if(isset($brand->name))

	                    {

	                        ?>

	                        

	                   <div class="onhot"><?= ucfirst($brand->name); ?></div>

	                   <?php

	                    }

	                    ?>
	                  </a>

	              </div>
	              <div class="add_tocart forgender ">

	                  <a href="#"><?= ucfirst($gender); ?></a>

	              </div>

	              <a href="<?php echo $this->crud_model->product_link($product_id); ?>">

	                <div class="labels">

	                    <?php

	                    if(isset($cat->category_name))

	                    {

	                        ?>

	                        

	                   <div class="onhot"><?= $cat->category_name; ?></div>

	                   <?php

	                    }

	                    ?>

	                </div>

	                <div class="inner">

	                  <img src="<?php echo $this->crud_model->file_view('product',$product_id,'','','thumb','src','multi','one'); ?>" class="owl-lazy" alt="" >

	                </div>

	              </a>

	              <div class="links-on-image"></div>

	            </div>

	            <div class="product-content">

	               <a class="product-loop-title" href="#">

	                  <h3 class="woocommerce-loop-product__title"><?php echo $title; ?></h3>

	               </a>

	               <span class="price">

	                <ins>

	                  <span class="woocommerce-Price-amount amount">

	                    <span class="woocommerce-Price-currencySymbol"></span><?php echo currency($sale_price); ?></span>

	                  </ins>

	                </span>

	            </div>

	        </div>

	      </div>

	    </div>