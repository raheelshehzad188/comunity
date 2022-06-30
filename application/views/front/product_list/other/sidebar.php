
<style type="text/css">
  .brand.gender .product-categories li {
    width: 32%;
    display: inline-block;
    margin: 3px 0;
    text-align: center;
}
</style>
<aside class="col-md-3 sidebar" id="sidebar">

    <!-- widget shop categories -->

    <div class="filterssidebar">
          <h1>Filters</h1>
          
          <div class="brand gender">
            <form id="variation_form">
              <input type="hidden" name="product_id" value="1"> 
              <div class="fSOLrS insize gender">
                <h2 font-size="2" font-weight="600" class="Text-sc-1g573g4 iOIQPS" style="margin: 5px 0 14px 6px;">Select Gender</h2>
                <div class="label_670">
                  <input type="radio"  class="attrs" name="gender" id="Men" value="men">
                  <label for="Men">Men</label>
                </div>
                <div class="label_671">
                  <input type="radio" class="attrs" name="gender" id="Women" value="women">
                  <label for="Women">Women</label>
                </div>
                <div class="label_706">
                  <input type="radio" class="attrs" name="gender" id="Kids" value="child">
                  <label for="Kids">Kids</label>
                </div>
              </div>

              <div class="fSOLrS insize brand">
                <h2 font-size="2" font-weight="600" class="Text-sc-1g573g4 iOIQPS" style="margin: 5px 0 14px 6px;">Select Brand</h2>
                    <?php
                    $brand = $this->db->get('brand')->result_array();
                    // var_dump($brand);
                    foreach($brand as $k=> $v)
                    {
                        ?>
                        
                <div class="label_671">
                  <input type="radio"class="attrs" name="brand" id="brand<?= $v['brand_id']; ?>" value="<?= $v['brand_id']; ?>">
                  <label for="brand<?= $v['brand_id']; ?>"><?= $v['name']; ?></label>
                </div>
                        <?php
                    }
                    ?>
              </div>
              <div class="fSOLrS insize price">
                  <p>
                  <h2 font-size="2" font-weight="600" class="Text-sc-1g573g4 iOIQPS" style="margin: 5px 0 14px 6px;">Price Range</h2>
                  </p>
                   
                  <div id="slider-range"></div>
                  <div id="range_val" ></div>
              </div>
              <div class="fSOLrS insize size">
                    
                      <h2 font-size="2" font-weight="600" class="Text-sc-1g573g4 iOIQPS" style="margin: 5px 0 14px 6px;">Select Size</h2>
                       <?php
                    $brand = $this->db->get('standerd_sizes')->result_array();
                    // var_dump($brand);
                    foreach($brand as $k=> $v)
                    {
                        ?>
                        
                <div class="label_671">
                  <input type="radio"class="attrs" name="size" id="size<?= $v['id']; ?>" value="<?= $v['eu_size']; ?>">
                  <label for="size<?= $v['id']; ?>"><?= $v['eu_size']; ?></label>
                </div>
                        <?php
                    }
                    ?>
              </div> 
              
           
            </form>
            
        </div>
          
          
          <!--<h2>Filter by Colors</h2>
          <ul class="product-color">
            <li class="red"><a href="#"><span></span></a></li>
            <li class="yellow"><a href="#"><span></span></a></li>
            <li class="green"><a href="#"><span></span></a></li>
            <li class="purple"><a href="#"><span></span></a></li>
            <li class="black"><a href="#"><span></span></a></li>
            <li class="blue"><a href="#"><span></span></a></li>
            <li class="pink"><a href="#"><span></span></a></li>
            <li class="orange"><a href="#"><span></span></a></li>
          </ul>-->
          
        </div>

</aside>



<input type="hidden" id="univ_max" value="<?php echo $this->crud_model->get_range_lvl('product_id !=', '', "max"); ?>">

<input type="hidden" id="cur_cat" value="0">

<?php include 'search_script.php'; ?>

<script type="text/javascript">
    
$( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 0, 500 ],
      slide: function( event, ui ) {
          console.log(ui.values);
          
        $( "#amount" ).val( "$" + ui.values[ 0 ]+" - $" + ui.values[ 1 ] );
        $( "#rangeaa" ).val(ui.values[ 0 ]+";" + ui.values[ 1 ] );
        $( "#range_val" ).text(ui.value );
        do_product_search('0');
      }
     });
  } );
</script>