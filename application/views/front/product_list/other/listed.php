<style>
    .pagination > li .active {
        cursor: pointer;
        border-color: #000;
        background-color: #000 !important;
        color: #fff;
    }
</style>
<div class="pagination-wrapper top">
</div>
<div class="row products <?php echo $viewtype; ?> flex-gutters-10">
    <?php
		if($viewtype == 'list'){
			$col_md = 12;
			$col_sm = 12;
			$col_xs = 12;
		} elseif($viewtype == 'grid'){
			$col_md = 3;
			$col_sm = 6;
			$col_xs = 6;
		}
        foreach ($all_products as $row) {
    ?>
    <div class="col-md-<?php echo $col_md; ?> col-sm-<?php echo $col_sm; ?> col-xs-<?php echo $col_xs; ?> mb-4">
        <?php echo $this->html_model->product_box($row, 'home_brand', 1); ?>
    </div>
    <?php
        }
    ?>
</div>
<?php  
            if(isset($tpage))
            {
                $tpage = ceil($tpage);
                $st = 0;
                $p= 5;
                $en = $st;
                if($cpage <=0)
                {
                   $st = 0;
                   $en = $st+$p;
                }
                elseif($cpage == $tpage)
                {
                   $st = $tpage - $p;
                   $en = $cpage; 
                }
                else
                {
                    $st = $cpage -2;
                    $en = $cpage +3;
                }
            ?>
            <ul class="pagination pagination-v2">
                <li><a rel="grow" class="btn-u btn-u-sea grow" onclick="do_product_search('0')"><<</a></li>
                <li><a rel="grow" class="btn-u btn-u-sea grow" onclick="do_product_search('<?= ($cpage !=0)?$cpage-1:0; ?>')"><</a></li>
                <?php
                
                for($i = $st; $i < $en;$i++){
                    if($i >= 0)
                {
                    ?>
                    <li><a rel="grow" class="btn-u btn-u-sea grow <?= ($i == $cpage)?"active":""; ?>" onclick="do_product_search(<?= $i ?>)"><?= $i+1; ?></a></li>
                    <?php                
                }
                    
                }
                ?>
                
                <li><a rel="grow" class="btn-u btn-u-sea grow" onclick="do_product_search('<?= ($cpage != $tpage)?$cpage+1:$tpage; ?>')">></a></li>
                <li><a rel="grow" class="btn-u btn-u-sea grow" onclick="do_product_search('<?= $tpage ?>')">>></a></li>
            </ul>
            <?php
            }
            ?>
<!-- /Pagination -->
<script>
$(document).ready(function(){
	set_product_box_height();
	$('[data-toggle="tooltip"]').tooltip();
});

function set_product_box_height(){
	var max_img = 0;
	$('.products .media img').each(function(){
        var current_height= parseInt($(this).css('height'));
		if(current_height >= max_img){
			max_img = current_height;
		}
    });
	$('.products .media img').css('height',max_img);
	
	var max_title=0;
	$('.products .caption-title').each(function(){
        var current_height= parseInt($(this).css('height'));
		if(current_height >= max_title){
			max_title = current_height;
		}
    });
	$('.products .caption-title').css('height',max_title);
}
</script>