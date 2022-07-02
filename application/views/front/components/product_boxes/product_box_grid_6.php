<?php
$img = '';
                        if($comp_cover)
                        {
                            $img = $this->crud_model->get_img($comp_cover);
                            if(isset($img->secure_url))
                            {
                                $img = $img->secure_url;
                            }

                        }
                        else
                        {
                            $img = $this->crud_model->file_view('product',$product_id,'','','thumb','src','multi','one');

                        }
                        ?>
                           <div class="item">
                               <div class="strip">
                                    <figure>
                                        <span class="ribbon off">-40%</span>
                                        <img src="<?= $img?>"  class="owl-lazy" alt="" style="opacity: 1;">
                                        <a href="#" class="strip_info">
                                            <small>Burghers</small>
                                            <div class="item_title">
                                                <h3><?php echo $title; ?></h3>
                                                <small>27 Old Gloucester St</small>
                                            </div>
                                        </a>
                                    </figure>
                                    
                                </div>
                           </div>
                        