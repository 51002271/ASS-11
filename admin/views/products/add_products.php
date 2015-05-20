				<div class="section">
                <script type="text/javascript">
					function checkpro(){
						var form = document.sac;
						if(form.Name.value == ""){
							alert("Vui lòng nhập tên sản phẩm");
							form.Name.focus();
							return false;
						}
						if(form.Price.value == ""){
							alert("Vui lòng nhập giá tiền");
							form.Price.focus();
							return false;
						}	}
				</script>
					<!--[if !IE]>start title wrapper<![endif]-->
					<div class="title_wrapper">
						<span class="title_wrapper_top"></span>
						<div class="title_wrapper_inner">
							<span class="title_wrapper_middle"></span>
							<div class="title_wrapper_content">
								<h2 class="menu_title">Thêm mới sản phẩm</h2>
							</div>
						</div>
						<span class="title_wrapper_bottom"></span>
					</div>
					
					<div class="section_content">
						<span class="section_content_top"></span>
						<div class="section_content_inner">
							<div class="table_wrapper" style="background:none;">
								<div class="table_wrapper_inner">
                                	<div class="error_red"><?php //if(isset($error)) { echo "<p>".$error."</p>"; } ?>
										<?php //echo validation_errors();?>
									</div>
									<form action="<?php echo base_url."admin/index.php?mod=products&act=add"; ?>" method="post" name="sac" onsubmit="return checkpro()" enctype="multipart/form-data">
                            		<div class="form_items">
                                    	<div class="form_items_left">Tên sản phẩm</div>
                                        <div class="form_items_right"><input name="Name" type="text" id="Name" size="30" /></div>
                                    </div>
                                   <div class="form_items">
                                    	<div class="form_items_left">Mô tả</div>
                                        <div class="form_items_right">
											<textarea name="Feature" id="Feature" cols="40" rows="4"></textarea> 
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Giá tiền</div>
                                        <div class="form_items_right"><input name="Price" type="text" id="Price" size="30" /></div>
                                    </div>
                                   
                                    <div class="form_items">
                                    	<div class="form_items_left">Bảo hành</div>
                                        <div class="form_items_right"><input name="Warrantee" type="text" id="Warrantee" size="30" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Khuyến mãi</div>
                                        <div class="form_items_right"><input name="Promotion" type="text" id="Promotion" size="30" /></div>
                                    </div>
                                    
                                        <div class="form_items">
                                    	<div class="form_items_left">Nhà sản xuất</div>
                                        <div class="form_items_right">
											<select name="Brand" id="Brand">
												<option value="Asus" >Asus</option>
												<option value="Dell" >Dell</option>
												<option value="Toshiba" >Toshiba</option>
												<option value="Sony" >Sony</option>	
											</select>
										</div>
                                    </div>
									<div class="form_items">
                                    	<div class="form_items_left">Sản phẩm</div>
                                        <div class="form_items_right">
                                            <input type="checkbox"  value="1" name="New" id="New"/>Mới <br /> 
                                        </div>
                                    </div>
                             
                                    <div class="form_items">
                                    	<div class="form_items_left">Chi tiết sản phẩm</div>
                                        <div class="form_items_right">
											<textarea name="Detail" id="Detail" cols="40" rows="4"></textarea> 
                                            <script type="text/javascript">CKEDITOR.replace('Detail');</script>                                        
											</div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Hình ảnh</div>
                                        <div class="form_items_right">
                                          <input type="file" name="upload" size="30" />
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right">
                                        <input type="submit" name="ok" value="Add Product" class="magin"/>
                                        </div>
                                    </div>
                                </form>
								</div>
							</div>
							<!--[if !IE]>end table_wrapper<![endif]-->
						</div>
						<span class="section_content_bottom"></span>
					</div>
					<!--[if !IE]>end section content<![endif]-->
				</div>