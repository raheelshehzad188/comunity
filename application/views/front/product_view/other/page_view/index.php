<style>
    .size_active{
        border:1px solid black !important;
    }
</style>
<?php
$vprice = 0;
$vpid = 0;
$stock_id = 0;
$pids = array();
foreach($vendors as $k=> $v)
{
    $pids[] = $v->product_id;
    $s = $this->db->where('product',$v->product_id)->order_by("rate", "desc")->get('stock')->row();
    if($k == 0)
    {
        $vprice = $s->rate;
        $stock_id = $s->stock_id;
        $vpid = $v->product_id;
    }
    if($vprice < $s->rate)
    {
        $vprice = $s->rate;
        $stock_id = $s->stock_id;
        $vpid = $v->product_id;
    }
}
$tot_imgs = $product->num_of_imgs;
      $product = array();
      if(isset($product_details[0]))
      {
      $product = $product_details[0];
      $tot_imgs = $product['num_of_imgs'];
      $id = $product['product_id'];
      $bid = $product['brand'];
      $category = $product['category'];
      $brand = $this->db->where('brand_id',$bid)->get('brand')->row();
      $cat = $this->db->where('category_id',$category)->get('category')->row();
      }
      
      $imgs = array();
      for($i = 1;$i<=$tot_imgs ;$i++)
      {
        //   die("Here");
          $im = base_url().'/uploads/product_image/product_'.$id.'_'.$i.'.jpg';
          $imgs[] = $im;
      }
?>
<link rel="stylesheet" href="<?php echo base_url(); ?>template/front/js/share/jquery.share.css">

<script src="<?php echo base_url(); ?>template/front/js/share/jquery.share.js"></script>

<section class="productDetails">
  <div class="ProductBreadcrumbWrapper-sc-1k97k8l gpdydV">
    <div class="ui tiny breadcrumb">
      <div class="section">
        <a href="/">Home</a>
      </div>
      <i class="fa fa-chevron-right"></i>
      <div class="section">
        <a href="<?= base_url('/home/brand/'); ?><?= $bid; ?>"><?= (isset($brand->name)?$brand->name:''); ?></a>
      </div>
      <i class="fa fa-chevron-right"></i>
      <div class="active section">
        <span><?= $product['title']; ?></span>
      </div>
    </div>
  </div>
  <div class="sinImg">
    <!--Bootstrap Responsive Thumbnail Slider/Carousel. If you like my work, please credit author: www.action360.ca @action360ca Enjoy!-->

  <div id="myCarousel" class="carousel slide" data-interval="false">

  <div class="carousel-inner" role="listbox">
      
      <?php
      if(empty($imgs))
      {
          $imgs[] = $this->crud_model->file_view('product',$id,'','','no','src','multi','one');
      }
      foreach($imgs as $k=> $v)
      {
          if($k == 0)
          {
              ?>
              <div class="item active">
        <img src="<?= $v ?>" alt="">
      </div>
              <?php
          }
          else
          {
              ?>
              
    <div class="item">
        <img src="<?= $v ?>" alt="">
      </div>
              <?php
          }
          ?>
      <?php
      }
      ?>
    
    <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>-->
    </div>
  
  <div id="thumbCarousel">
      <?php
      
      foreach($imgs as $k=> $v)
      {
      ?>
              <div data-target="#myCarousel" data-slide-to="<?= $k ?>" class="thumb <?= ($k = 0)?"active":""; ?>"><img src="<?= $v ?>" alt="XZ" style="width: 120px; height: 130px">
      </div>
      <?php
      }
      ?>
      
      
      
  
  </div>
<?php
$raw = json_decode($product['raw'],true);
?>
    
    <h2 class="pic_title"><?= $product['title']; ?></h2>
    <div role="list" class="ui divided horizontal list">
      <div role="listitem" class="item">SKU - <?= $product['sku']; ?></div>
      <div role="listitem" class="item"><?= $raw['Release date']; ?></div>
    </div>
    <ul class="textLike">
      <li><a href="#"><i class="fa fa-comment-o"></i>0</a></li>
      <li><a href="#"><i class="fa fa-share-alt"></i>Share</a></li>
      <li><a href="#"><i class="fa fa-heart-o"></i>7</a></li>
    </ul>
  </div>
  <div class="prodDetails">
    <ul class="nav nav-tabs">
      <li class="home active"><a data-toggle="tab" href="#home1 <?= (empty($vendors))?"d-none":""; ?>">Prices</a></li>
      <li class="menu1 <?= (!empty($vendors))?" ":""; ?>"><a data-toggle="tab" href="#menu1">Product Decription</a></li>
    </ul>
  <div class="container">
     
    <div class="tab-content">
        
      <div id="home1" class="tab-pane fade in active" >
           <?php
      if(empty($vendors))
      {
         ?>
         <p>This Product is not added by a Vendor.<a href="<?= base_url('vendor_logup/registration'); ?>">Become a vendor</a></p>
         <?php 
      }
      ?>
        	<div class="row <?= !$vendors?"d-none":""; ?>"">
            <div class="col-md-3 col-sm-3">
                <form id="variation_form">
                   
                    <input type="hidden" name="product_id" value="<?= $product['product_id']?>" /> 
                    <div class="fSOLrS insize">
                      <h2 font-size="2" font-weight="600" class="Text-sc-1g573g4 iOIQPS" style="margin: 5px 0 14px 6px;">Select Size</h2>
                    <?php
                    foreach($attribute as $k => $v)
                    {
                        

                        ?>
                            <?php
                            
                            foreach($v['options'] as $ok =>$ov)
                            {
                                //get attribute id start
                                //
                                $attr_id = $this->db->where_in('product_id', $pids)->where('value',$ov['value'])->get('attribute_to_values')->result();
                                if($attr_id)
                                {
                                    $aids = array();
                                    foreach($attr_id as $k1=>$v1)
                                    {
                                        $aids[] = $v1->id;
                                    }
                                $stock  = $this->db->where('quantity >',0 )->where_in('product', $pids)->where_in('attribute',$aids)->get('stock')->result_array();
                                if($stock)
                                {
                                ?>
                                <div  class="label_<?= $ov['id'];?>">
                                <input type="radio"  onchange="update_var();" class="attrs" name="attribute[<?= $v['ID']; ?>]" id="size_<?= $ov['id'];?>" value="<?= $ov['id'];?>" />
                            <label  for="size_<?= $ov['id'];?>"><?= $ov['value'];?></label>
                            </div>
                                <?php
                                }//$stock
                                }//$attr_id
                            }
                            ?>
                        
                <?php
            }
            ?>
            </form></div></div>
           <div class="col-md-6 col-sm-6">
              <div class="createVendor">
                <a href="#">Choose Your Vendor </a>
              </div>
              <div class="vendorscroll">
                <?php
                include "vendors.php";
                ?>
                
              </div>
          </div>
          <div class="col-md-3 col-sm-3">
              <div class="Box-sc-5myfqj hKVtIv">
                <div class="Box-sc-5myfqj Segment-sc-rtt8nt DesktopContainer-sc-1selzw4 doeJNr fSOLrS">
                  <div display="flex" class="Box-sc-5myfqj ePtniE">
                    <div width="100%" display="flex" class="Box-sc-5myfqj eTzjZW">
                      <h2 font-size="2" font-weight="600" class="Text-sc-1g573g4 iOIQPS">Product Details</h2>
                    </div>
                    <div class="Box-sc-5myfqj ProductInfoLineItem-sc-1qx7zwn ixbUxL bfUjGJ">
                      <span class="Text-sc-1g573g4 ProductInfoLabel-sc-jnt22r bzPDBf tpMDE">Brand</span>
                      <span text-decoration="underline" class="Text-sc-1g573g4 eLOckC">
                        <a class="Link-sc-sri7gr chzUbH" href="<?= base_url('home/brand/'); ?><?= $bid; ?>"><?= (isset($brand->name)?$brand->name:''); ?></a>
                      </span>
                    </div>
                    <div class="Box-sc-5myfqj ProductInfoLineItem-sc-1qx7zwn ixbUxL bfUjGJ">
                      <span class="Text-sc-1g573g4 ProductInfoLabel-sc-jnt22r bzPDBf tpMDE">SKU</span>
                      <span class="Text-sc-1g573g4 bzPDBf"><?= $product['sku']; ?></span>
                    </div>
                    <div class="Box-sc-5myfqj ProductInfoLineItem-sc-1qx7zwn ixbUxL bfUjGJ">
                      <span class="Text-sc-1g573g4 ProductInfoLabel-sc-jnt22r bzPDBf tpMDE"> Price</span>
                      <span class="Text-sc-1g573g4 bzPDBf product_price">Select a vendor</span>
                    </div>
                  </div>
                </div>
              </div>
              <form id="add_cat_form" style="" >
              <div class="quantity cart_div" style="display:none;">
                <input type="number" min="1" name="qty"  id="cart_quantity" max="9" step="1" value="1">
                
              </div>
              <input type="hidden" id="product_id" value="<?= $vpid ?>" /> 
              <input type="hidden" id="stock_id" value="<?= $stock_id; ?>" /> 
              <div class="createVendor cart_div" style="display:none;">
              <a onclick="detail_cart(event)">Add to Cart</a>
              </form>
            </div>
          </div>
          
         
      	</div>
  	  </div>
      <div id="menu1" class="tab-pane fade <?= (!empty($vendors))?" ":"active in "; ?>" >
        <h3>Product Discription</h3> 
        <p ><?= $product['description'] ?></p>
      </div>
    </div>
  </div>
  </div>
</section>
<?php
/*
die("PL");

	foreach($product_details as $row){

		include 'product_detail.php';

		include 'product_specification.php';

		include 'related_products.php';

	}

?>*/
