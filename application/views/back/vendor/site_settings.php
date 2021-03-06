
<div id="content-container"> 
    <div id="page-title">
        <h1 class="page-header text-overflow"><?php echo translate('manage_business_page');?></h1>
    </div>
    <div class="tab-base">
        <div class="panel">
            <div class="tab-base tab-stacked-left">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#demo-stk-lft-tab-0"><?php echo translate('vendor_detail');?></a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#demo-stk-lft-tab-1"><?php echo translate('gallary');?></a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#demo-stk-lft-tab-2"><?php echo translate('vendor_images');?></a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#demo-stk-lft-tab-4"><?php echo translate('social_media');?></a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#demo-stk-lft-tab-5"><?php echo translate('SEO');?></a>
                    </li>
                </ul>

                <div class="tab-content bg_grey">
                    <span id="genset"></span>
                    
                    
                    <div id="demo-stk-lft-tab-0" class="tab-pane fade active in">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading margin-bottom-20">
                                    <h3 class="panel-title">
                                        <?php echo translate('bussiness_detail');?>
                                    </h3>
                                </div>
                            <?php 
                                $description =  $this->db->get_where('vendor',array('vendor_id' => $this->session->userdata('vendor_id')))->row()->description;
                                $keywords =  $this->db->get_where('vendor',array('vendor_id' => $this->session->userdata('vendor_id')))->row()->keywords;
                                $seo_title =  $this->db->get_where('vendor',array('vendor_id' => $this->session->userdata('vendor_id')))->row()->seo_title;
                                $seo_description =  $this->db->get_where('vendor',array('vendor_id' => $this->session->userdata('vendor_id')))->row()->seo_description;
                            ?>
							<?php
                                echo form_open(base_url() . 'vendor/seo_settings/set', array(
                                    'class' => 'form-horizontal',
                                    'method' => 'post',
                                    'id' => '',
                                    'enctype' => 'multipart/form-data'
                                ));
                            ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="demo-hor-inputemail">
                                        <?php echo translate('name'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="col-sm-">
                                            <input type="text"  name="name" value="<?php echo $name; ?>" class="form-control" >
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">
                                        <?php echo translate('tag_line');?>
                                    </label>
                                    <div class="col-sm-8">
                                        <textarea name="tag_line"
                                                  placeholder="<?php echo translate('Tag Line')?>"
                                                  class="form-control required" rows='4' ><?php echo $tag_line; ?></textarea>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="">
                                        <?php echo translate('description');?>
                                    </label>
                                    <div class="col-sm-8">
                                        <textarea name="description"
                                                  placeholder="<?php echo translate('Description')?>"
                                                  class="form-control required" rows='4' ><?php echo $description; ?></textarea>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="demo-hor-inputemail">
                                        <?php echo translate('tags'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="col-sm-">
                                            <input type="text"  data-role="tagsinput" name="tags" value="<?php echo $tags; ?>" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="demo-hor-inputemail">
                                        <?php echo translate('region'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="col-sm-">
                                            <input type="text"  data-role="tagsinput" name="region" value="<?php echo $region; ?>" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="demo-hor-inputemail">
                                        <?php echo translate('categories'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="col-sm-">
                                            <input type="text"  data-role="tagsinput" name="categories" value="<?php echo $categories; ?>" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="panel-footer text-right">
                                    <span class="btn btn-success btn-labeled fa fa-check submitter enterer"  data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>'>
                                    <?php echo translate('save');?></span>
                                </div>
                            </form>               
                        </div>
                        </div> 
                    </div>
                    
                    <div id="demo-stk-lft-tab-1" class="tab-pane fade <?php if($tab_name=="gallary") {?>active in<?php } ?>">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading margin-bottom-20">
                                    <h3 class="panel-title">
                                        <?php echo translate('bussiness_detail');?>
                                    </h3>
                                </div>
                            <?php 
                                $description =  $this->db->get_where('vendor',array('vendor_id' => $this->session->userdata('vendor_id')))->row()->description;
                                $keywords =  $this->db->get_where('vendor',array('vendor_id' => $this->session->userdata('vendor_id')))->row()->keywords;
                                $seo_title =  $this->db->get_where('vendor',array('vendor_id' => $this->session->userdata('vendor_id')))->row()->seo_title;
                                $seo_description =  $this->db->get_where('vendor',array('vendor_id' => $this->session->userdata('vendor_id')))->row()->seo_description;
                            ?>
							<?php
                                echo form_open(base_url() . 'vendor/gallary/set', array(
                                    'class' => 'form-horizontal',
                                    'method' => 'post',
                                    'id' => 'gallary-form',
                                    'enctype' => 'multipart/form-data'
                                ));
                            ?>
                                
                                <div class="form-group margin-top-10">
                                    <label class="col-sm-3 control-label margin-top-10" for="demo-hor-inputemail"><h5><?php echo translate('gallary');?></h5> <br><i>(<?php echo translate('suggested_width');?>:<?php echo translate('height');?> - 300px:300px*)</i></label>
                                    <div class="col-sm-9" id="gallary_image">
                                        <div class="col-sm-2">
                                        <span class="pull-left btn btn-default btn-file margin-top-10">
                                            <?php echo translate('gallary_images');?>
                                            <input type="file" name="logo" class="form-control" multiple="" id="imgInp">
                                        </span>
                                        </div>
                                        <div class="col-sm-2" style="margin: 14px;">
                                            <?php if(file_exists('uploads/vendor_logo_image/logo_'.$this->session->userdata('vendor_id').'.png')){?>
                                            <img class="img-responsive img-md img-border" src="<?php echo base_url(); ?>uploads/vendor_logo_image/logo_<?php echo $this->session->userdata('vendor_id'); ?>.png" id="blah" style="width:auto !important;" >
                                            <?php }else{ ?>
                                            <img class="img-responsive img-md img-border" src="<?php echo base_url(); ?>uploads/vendor_logo_image/default.jpg" id="blah" style="width:auto !important;" >
                                        <?php }?>
                                        </div>
                                        <div class="col-sm-5"></div>
                                    </div>
                                </div>
                                

                                <div class="panel-footer text-right">
                                    <span class="btn btn-success btn-labeled fa fa-check submitter enterer"  data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>'>
                                    <?php echo translate('save');?></span>
                                </div>
                            </form>               
                        </div>
                        </div> 
                    </div>
                    
                    <div id="demo-stk-lft-tab-2" class="tab-pane fade <?php if($tab_name=="vendor_images") {?>active in<?php } ?>">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo translate('select_images');?></h3>
                                </div>
                            <?php
                                echo form_open(base_url() . 'vendor/vendor_images/', array(
                                    'class' => 'form-horizontal',
                                    'method' => 'post',
                                    'id' => '',
                                    'enctype' => 'multipart/form-data'
                                ));
                            ?>
                                <div class="form-group margin-top-10">
                                    <label class="col-sm-3 control-label margin-top-10" for="demo-hor-inputemail"><h5><?php echo translate('logo');?></h5> <br><i>(<?php echo translate('suggested_width');?>:<?php echo translate('height');?> - 300px:300px*)</i></label>
                                    <div class="col-sm-9">
                                        <div class="col-sm-2">
                                            <?php if(file_exists('uploads/vendor_logo_image/logo_'.$this->session->userdata('vendor_id').'.png')){?>
                                            <img class="img-responsive img-md img-border" src="<?php echo base_url(); ?>uploads/vendor_logo_image/logo_<?php echo $this->session->userdata('vendor_id'); ?>.png" id="blah" style="width:auto !important;" >
                                            <?php }else{ ?>
                                            <img class="img-responsive img-md img-border" src="<?php echo base_url(); ?>uploads/vendor_logo_image/default.jpg" id="blah" style="width:auto !important;" >
                                        <?php }?>
                                        </div>
                                        <div class="col-sm-2">
                                        <span class="pull-left btn btn-default btn-file margin-top-10">
                                            <?php echo translate('select_logo');?>
                                            <input type="file" name="logo" class="form-control" id="imgInp">
                                        </span>
                                        </div>
                                        <div class="col-sm-5"></div>
                                    </div>
                                </div><hr>
                                <div class="form-group margin-top-10">
                                    <label class="col-sm-3 control-label margin-top-10" for="demo-hor-inputemail">
                                        <h5><?php echo translate('cover_photo'); ?></h5> 
                                        <br>
                                        <i>(<?php echo translate('suggested_width');?>:<?php echo translate('height');?> - 1140px:320px*)</i>
                                    </label>
                                    <div class="col-sm-9">
                                        <div class="col-sm-12">
                                             <?php if(file_exists('uploads/vendor_banner_image/banner_'.$this->session->userdata('vendor_id').'.jpg')){?>
                                            <img class="img-responsive img-lg img-border" src="<?php echo base_url(); ?>uploads/vendor_banner_image/banner_<?php echo $this->session->userdata('vendor_id'); ?>.jpg" id="blahn" style="width:auto !important; height:320px;">
                                             <?php }else{ ?>
                                             <img class="img-responsive img-lg img-border" src="<?php echo base_url(); ?>uploads/vendor_banner_image/default.jpg" id="blahn" style="width:auto !important; height:320px;">
                                             <?php }?>
                                        </div>
                                        <div class="col-sm-6">
                                        <span class="pull-left btn btn-default btn-file margin-top-10">
                                            <?php echo translate('select_photo');?>
                                            <input type="file" name="banner" class="form-control" id="imgInpn">
                                        </span>
                                        </div>
                                        <div class="col-sm-5"></div>
                                    </div>
                                </div>
                                <br />
                                <div class="panel-footer text-right">
                                    <span class="btn btn-success btn-labeled fa fa-check submitter enterer"  data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>'>
                                        <?php echo translate('save');?>
                                    </span>
                                </div>
                            </form> 
                            </div>              
                        </div>
                    </div>
                
                    <!--UPLOAD : SOCIAL LINKS---------->
                    <div id="demo-stk-lft-tab-4" class="tab-pane fade <?php if($tab_name=="social_links") {?>active in<?php } ?>">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?php echo translate('social_links');?></h3>
                            </div>
							<?php
                                echo form_open(base_url() . 'vendor/social_links/set/', array(
                                    'class' => 'form-horizontal',
                                    'method' => 'post',
                                    'id' => '',
                                    'enctype' => 'multipart/form-data'
                                ));
                            ?>
                                <div class="panel-body">
                                    <!--FACEBOOK---------->
                                    <div class="form-group mar-btm">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-6">
                                            <div class="input-group mar-btm">
                                                <span class="input-group-addon fb_font">
                                                    <i class="fa fa-facebook-square fa-lg"></i>
                                                </span>
                                                <input type="text" name="facebook" value="<?php echo $this->crud_model->get_type_name_by_id('vendor',$this->session->userdata('vendor_id'),'facebook'); ?>" id="demo-hor-inputemail" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <!--G+---------->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" ></label>
                                        <div class="col-sm-6">
                                            <div class="input-group mar-btm">
                                                <span class="input-group-addon g_font">
                                                    <i class="fa fa-google-plus-square fa-lg"></i>
                                                </span>
                                                <input type="text" name="google-plus" value="<?php echo $this->crud_model->get_type_name_by_id('vendor',$this->session->userdata('vendor_id'),'google_plus'); ?>" id="demo-hor-inputemail" class="form-control">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--TWITTER---------->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" ></label>
                                        <div class="col-sm-6">
                                            <div class="input-group mar-btm">
                                                <span class="input-group-addon tw_font">
                                                    <i class="fa fa-twitter-square fa-lg"></i>
                                                </span>
                                                <input type="text" name="twitter" value="<?php echo $this->crud_model->get_type_name_by_id('vendor',$this->session->userdata('vendor_id'),'twitter'); ?>" id="demo-hor-inputemail" class="form-control">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--PINTEREST---------->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" ></label>
                                        <div class="col-sm-6">
                                            <div class="input-group mar-btm">
                                                <span class="input-group-addon pin_font">
                                                    <i class="fa fa-pinterest fa-lg"></i>
                                                </span>
                                                <input type="text" name="pinterest" value="<?php echo $this->crud_model->get_type_name_by_id('vendor',$this->session->userdata('vendor_id'),'pinterest'); ?>" id="demo-hor-inputemail" class="form-control">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--SKYPE---------->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" ></label>
                                        <div class="col-sm-6">
                                            <div class="input-group mar-btm">
                                                <span class="input-group-addon skype_font">
                                                    <i class="fa fa-skype fa-lg"></i>
                                                </span>
                                                <input type="text" name="skype" value="<?php echo $this->crud_model->get_type_name_by_id('vendor',$this->session->userdata('vendor_id'),'skype'); ?>" id="demo-hor-inputemail" class="form-control">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--YOUTUBE---------->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" ></label>
                                        <div class="col-sm-6">
                                            <div class="input-group mar-btm">
                                                <span class="input-group-addon youtube_font">
                                                    <i class="fa fa-youtube fa-lg"></i>
                                                </span>
                                                <input type="text" name="youtube" value="<?php echo $this->crud_model->get_type_name_by_id('vendor',$this->session->userdata('vendor_id'),'youtube'); ?>" id="demo-hor-inputemail" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--SAVE---------->
                                <div class="panel-footer text-right">
                                    <span class="btn btn-success btn-labeled fa fa-check submitter enterer"  data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>'>
                                        <?php echo translate('save');?>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- START : MANAGE SEO------>
                    <div id="demo-stk-lft-tab-5" class="tab-pane fade">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading margin-bottom-20">
                                    <h3 class="panel-title">
                                        <?php echo translate('manage_search_engine_optimization');?>
                                    </h3>
                                </div>
                            <?php 
                                $description =  $this->db->get_where('vendor',array('vendor_id' => $this->session->userdata('vendor_id')))->row()->description;
                                $keywords =  $this->db->get_where('vendor',array('vendor_id' => $this->session->userdata('vendor_id')))->row()->keywords;
                                $seo_title =  $this->db->get_where('vendor',array('vendor_id' => $this->session->userdata('vendor_id')))->row()->seo_title;
                                $seo_description =  $this->db->get_where('vendor',array('vendor_id' => $this->session->userdata('vendor_id')))->row()->seo_description;
                            ?>
							<?php
                                echo form_open(base_url() . 'vendor/seo_settings/set', array(
                                    'class' => 'form-horizontal',
                                    'method' => 'post',
                                    'id' => '',
                                    'enctype' => 'multipart/form-data'
                                ));
                            ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="demo-hor-inputemail">
                                        <?php echo translate('keywords'); ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <div class="col-sm-">
                                            <input type="text"  data-role="tagsinput" name="keywords" value="<?php echo $keywords; ?>" class="form-control" >
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10"><small>*<?php echo translate('Write an seo friendly title within 60 characters')?></small></div>
                                    <label class="col-sm-2 control-label" for="">
                                        <?php echo translate('Seo Friendly Title');?>
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" name="seo_title" value="<?php echo $seo_title; ?>"
                                               placeholder="<?php echo translate('Ex. Nike - Just do it')?>"
                                               class="form-control required">
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10"><small>*<?php echo translate('Write an seo friendly description within 160 characters')?></small></div>
                                    <label class="col-sm-2 control-label" for="">
                                        <?php echo translate('Seo Friendly Description');?>
                                    </label>
                                    <div class="col-sm-8">
                                        <textarea name="seo_description"
                                                  placeholder="<?php echo translate('Ex. Find best athletic shoes in North America and Europe')?>"
                                                  class="form-control required" rows='4' ><?php echo $seo_description; ?></textarea>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>

                                <div class="panel-footer text-right">
                                    <span class="btn btn-success btn-labeled fa fa-check submitter enterer"  data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('settings_updated!'); ?>'>
                                    <?php echo translate('save');?></span>
                                </div>
                            </form>               
                        </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="display:none;" id="site"></div>
<!-- for logo settings -->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#wrap').hide('fast');
                $('#blah').attr('src', e.target.result);
                $('#wrap').show('fast');
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });

    function readURLn(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blahn').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInpn").change(function(){
        readURLn(this);
    });


    var base_url = '<?php echo base_url(); ?>'
    var user_type = 'vendor';
    var module = 'site_settings';
    var list_cont_func = 'show_all';
	
	$(document).ready(function() {
		$("form").submit(function(e){
			return false;
		});
		
	$("#gallary-form").on('submit',(function(e) {
	  e.preventDefault();
	  $.ajax({
	        url: "<?= base_url().'/vendor/gallary/set' ?>",
		    type: "POST",
		    data:  new FormData(this),
		    contentType: false,
	        cache: false,
	   		processData:false,
	   		beforeSend : function()
	   		{
	    		$("#err").fadeOut();
	   		},
	   		success: function(data)
	      	{
			    if(data=='error')
			    {
			     // invalid file format.
			     $("#err").html("Invalid File !").fadeIn();
			     $(".alert1").html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Holy guacamole!</strong>Try Again<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); 
			    	$("#excleupload")[0].reset(); 
			    }
			    else
			    {
			    	const obj = JSON.parse(data);
			    	$(".alert1").html('<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Holy guacamole!</strong>successfully inserted<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); 
			    	$("#excleupload")[0].reset(); 
			    	$('.upload__img-box').append("<div style='background-image: url(uploads/"+obj.path+");margin: 16px;' class='img-bg'><div class='upload__img-close'><i onclick='delimage("+obj.id+")'' id='img_"+obj.id+"' class='fa fa-times-circle-o' aria-hidden='true' style='color: white;font-size: 24px;position: relative;float: right;' ></i></div></div>");
			    	$("#myform")[0].reset(); 
			    }
	      	},
	     	error: function(e) 
		    {
		    	$("#err").html(e).fadeIn();
		    }          
	  });

	 }));

	});
</script>
<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js">
</script>
