<div>
    <?php
		echo form_open(base_url() . 'vendor/stock/do_add/'.$pid, array(
			'class' => 'form-horizontal',
			'method' => 'post',
			'id' => 'stock_add',
			'enctype' => 'multipart/form-data'
		));
	?>
        <div class="panel-body">
            <?php
            foreach($attribute as $k => $v)
            {
                ?>
                <div class="form-group">
                <label class="col-sm-4 control-label" for="demo-hor-1"><?php echo translate($v['name']);?></label>
                <div class="col-sm-6">
                    <select name="attribute[<?= $v['id']; ?>]" >
                        
                        <option><?php echo translate($v['name']);?></option>
                    <?php
                    foreach($v['options'] as $ok =>$ov)
                    {
                        ?>
                        <option value="<?= $ov['id'];?>" ><?= $ov['value'];?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>
                <?php
            }
            ?>

            <div class="form-group" id="pro" style="display:none;">
                <label class="col-sm-4 control-label" for="demo-hor-3"><?php echo translate('product');?></label>
                <div class="col-sm-6" id="product">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label" for="demo-hor-4"><?php echo translate('quantity');?></label>
                <div class="col-sm-6">
                    <input type="number" name="quantity" min="0" id="quantity" class="form-control totals required">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-4 control-label" for="demo-hor-5"><?php echo translate('rate');?></label>
                <div class="col-sm-6">
                    <input type="number" name="rate" id="rate" class="form-control totals">
                </div>
            </div>

            <div class="d-none hidden form-group">
                <label class="col-sm-4 control-label" for="demo-hor-6"><?php echo translate('total');?></label>
                <div class="col-sm-6">
                    <input type="number" name="total" id="total" class="form-control totals">
                </div>
            </div>

            <div class="form-group d-none hidden">
                <label class="col-sm-4 control-label" for="demo-hor-7"><?php echo translate('reason_note');?></label>
                <div class="col-sm-6">
                    <textarea name="reason_note" class="form-control" rows="3"></textarea>
                </div>
            </div>
        </div>
	</form>
</div>
<script type="text/javascript">

    $(document).ready(function() {
        $('.demo-chosen-select').chosen();
        $('.demo-cs-multiselect').chosen({width:'100%'});
    });

    function other(){
        $('.demo-chosen-select').chosen();
        $('.demo-cs-multiselect').chosen({width:'100%'});
        $('#reserve').hide();
        $('#rate').val($('#reserve').html());
        total();
    }
    function get_cat(id){
        $('#sub').hide('slow');
		$('#pro').hide('slow');
        ajax_load(base_url+'admin/stock/sub_by_cat/'+id,'sub_cat','other');
        $('#sub').show('slow');
        total();
    }
	function get_product(id){
        $('#pro').hide('slow');
        ajax_load(base_url+'admin/stock/pro_by_sub/'+id,'product','other');
        $('#pro').show('slow');
        total();
    }
    
    function get_pro_res(id){
        ajax_load(base_url+'admin/product/pur_by_pro/'+id,'reserve','other');
    }
    function total(){
        var total = Number($('#quantity').val())*Number($('#rate').val());
        $('#total').val(total);
    }
    $(".totals").change(function(){
        total();
    });


	$(document).ready(function() {
		$("form").submit(function(e){
			event.preventDefault();
		});
	});
</script>
<div id="reserve"></div>

