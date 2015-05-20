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
							form.Name.focus();
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
					<!--[if !IE]>end title wrapper<![endif]-->
					
					<!--[if !IE]>start section content<![endif]-->
					<div class="section_content">
						<span class="section_content_top"></span>
						<div class="section_content_inner">
                        	<div class="table_tabs_menu">
							<!--[if !IE]>start  tabs<![endif]-->
							<!--[if !IE]>end  tabs<![endif]-->

							</div>
				<!--[if !IE]>start table_wrapper<![endif]-->
							<div class="table_wrapper" style="background:none;">
								<div class="table_wrapper_inner">
                                	<div class="error_red"><?php //if(isset($error)) { echo "<p>".$error."</p>"; } ?>
										<?php //echo validation_errors();?>
									</div>
									<form action="<?php echo base_url."admin/index.php?mod=accessories&act=edit&pid=".$data['info']['Id'].""; ?>" method="post" name="sac" onsubmit="return checkpro()" enctype="multipart/form-data">
                            		<div class="form_items">
                                    	<div class="form_items_left">Tên sản phẩm</div>
                                        <div class="form_items_right"><input name="Name" type="text" id="Name" size="30" value="<?php echo $data['info']['Name']; ?>" /></div>
                                    </div>
									<div class="form_items">
                                    	<div class="form_items_left">Mô tả</div>
                                        <div class="form_items_right">
											<textarea name="Feature" id="Feature" cols="40" rows="4"><?php echo $data['info']['Feature']; ?></textarea> 
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Giá tiền</div>
                                        <div class="form_items_right"><input name="Price" type="text" id="Price" size="30" value="<?php echo $data['info']['Price']; ?>" /></div>
                                    </div>
                                    
                                    <div class="form_items">
                                    	<div class="form_items_left">Bảo hành</div>
                                        <div class="form_items_right"><input name="Warrantee" type="text" id="Warrantee" size="30" value="<?php echo $data['info']['Warrantee']; ?>" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Khuyến mại</div>
                                        <div class="form_items_right"><input name="Promotion" type="text" id="Promotion" size="30" value="<?php echo $data['info']['Promotion']; ?>" /></div>
                                    </div>
                                   
                                    <div class="form_items">
                                    	<div class="form_items_left">Loại</div>
                                        <div class="form_items_right">
											<select name="Brand" id="Brand">
												<option value="Ổ cứng" <?php if($data['info']['Brand'] == "Ổ cứng"){ echo "selected = 'selected'"; }?>>Ổ cứng</option>
												<option value="Combo phụ kiện Laptop" <?php if($data['info']['Brand'] == "Combo phụ kiện Laptop"){ echo "selected = 'selected'"; }?>>Combo phụ kiện Laptop</option>
												<option value="Balo & Túi" <?php if($data['info']['Brand'] == "Balo & Túi"){ echo "selected = 'selected'"; }?>>Balo & Túi</option>
												<option value="Bàn phím" <?php if($data['info']['Brand'] == "Bàn phím"){ echo "selected = 'selected'"; }?>>Bàn phím</option>
												<option value="Thiết bị mạng Laptop" <?php if($data['info']['Brand'] == "Thiết bị mạng Laptop"){ echo "selected = 'selected'"; }?>>Thiết bị mạng Laptop</option>
												<option value="Chuột" <?php if($data['info']['Brand'] == "Chuột"){ echo "selected = 'selected'"; }?>>Chuột</option>
												<option value="Miếng dán màn hình" <?php if($data['info']['Brand'] == "Miếng dán màn hình"){ echo "selected = 'selected'"; }?>>Miếng dán màn hình</option>
												<option value="Sạc Laptop" <?php if($data['info']['Brand'] == "Sạc Laptop"){ echo "selected = 'selected'"; }?>>Sạc Laptop</option>												
												<option value="Đế tản nhiệt" <?php if($data['info']['Brand'] == "Đế tản nhiệt"){ echo "selected = 'selected'"; }?>>Đế tản nhiệt</option>
												<option value="Loa dàn" <?php if($data['info']['Brand'] == "Loa dàn"){ echo "selected = 'selected'"; }?>>Loa dàn</option>
												<option value="Tai nghe" <?php if($data['info']['Brand'] == "Tai nghe"){ echo "selected = 'selected'"; }?>>Tai nghe</option>
												<option value="USB" <?php if($data['info']['Brand'] == "USB"){ echo "selected = 'selected'"; }?>>USB</option>
											</select>
										</div>
                                    </div>
								
                                    <div class="form_items">
                                    	<div class="form_items_left">Hình ảnh</div>
                                        <div class="form_items_right">
                                        	<img src="<?php echo $data['info']['Img']."" ;?>" width="150" height="130" />
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