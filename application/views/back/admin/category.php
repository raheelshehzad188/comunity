<div id="content-container">
	<div id="page-title">
		<h1 class="page-header text-overflow" ><?php echo translate('manage_categories');?></h1>
	</div>
	<div class="tab-base">
		<div class="panel">
			<div class="panel-body">
				<div class="tab-content">
					<div style="border-bottom: 1px solid #ebebeb;padding: 25px 5px 5px 5px;"
                    	class="col-md-12" >
						<button class="btn btn-primary btn-labeled fa fa-plus-circle pull-right mar-rgt" 
                        	onclick="ajax_modal('add','<?php echo translate('add_category'); ?>','<?php echo translate('successfully_added!'); ?>','category_add','')">
								<?php echo translate('create_category');?>
                                	</button>
					</div>
					<br>
                    <div class="tab-pane fade active in" 
                    	id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	var base_url = '<?php echo base_url(); ?>'
	var user_type = 'admin';
	var module = 'category';
	var list_cont_func = 'list';
	var dlt_cont_func = 'delete';
</script>
<script type="text/javascript">
	$('.signup_cat').click(function(){
		alert();
	});
	function signup_cat(id){
		var url = base_url+'admin/category/signup_cat/'+id
		ajax_load(url,id,'signup_cat');
	}
	function main_cat(id){
		var url = base_url+'admin/category/main_cat/'+id
		ajax_load(url,id,'signup_cat');
	}
	function signup_main_cat(id){
		var url = base_url+'admin/category/signup_main_cat/'+id
		ajax_load(url,id,'signup_cat');
	}
</script>
