				<div class="section">
                <script type="text/javascript">
					function checkacs(){
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
									<form action="<?php echo base_url."admin/index.php?mod=accessories&act=add"; ?>" method="post" name="sac" onsubmit="return checkacs()" enctype="multipart/form-data">
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
                                    	<div class="form_items_left">Loại</div>
                                        <div class="form_items_right">
											<select name="Brand" id="Brand">
												<option value="Ổ cứng" >Ổ cứng</option>
												<option value="Combo phụ kiện Laptop" >Combo phụ kiện Laptop</option>
												<option value="Balo & Túi" >Balo & Túi</option>
												<option value="Bàn phím" >Bàn phím</option>	
												<option value="Thiết bị mạng Laptop" >Thiết bị mạng Laptop</option>
												<option value="Chuột" >Chuột</option>
												<option value="Miếng dán màn hình" >Miếng dán màn hình</option>
												<option value="Sạc Laptop" >Sạc Laptop</option>	
												<option value="Đế tản nhiệt" >Đế tản nhiệt</option>
												<option value="Loa dàn" >Loa dàn</option>
												<option value="Tai nghe" >Tai nghe</option>
												<option value="USB" >USB</option>	
											</select>
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