				<div class="section">
                <script type="text/javascript">
					function checkmenu(){
						var form = document.sac;
						if(form.namecate.value == ""){
							alert("Vui lòng nhập Tiêu đề");
							form.namecate.focus();
							return false;
						}
						
					}
				</script>
					<!--[if !IE]>start title wrapper<![endif]-->
					<div class="title_wrapper">
						<span class="title_wrapper_top"></span>
						<div class="title_wrapper_inner">
							<span class="title_wrapper_middle"></span>
							<div class="title_wrapper_content">
								<h2 class="menu_title">Sửa thông tin danh mục</h2>
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
                                	<div class="error_red"><?php if(isset($data['error'])) { echo "<p>".$data['error']."</p>"; } ?></div>
									<form action="index.php?mod=menu&act=edit&mid=<?php echo $data['info']['Id'];?>" method="post" name="sac" onsubmit="return checkmenu()" enctype="multipart/form-data">
                            		<div class="form_items">
                                    	<div class="form_items_left">Tiêu đề</div>
                                        <div class="form_items_right"><input type="text" name="title" size="30" value="<?php echo $data['info']['Name'] ;?>"/></div>
                                    </div>
                                  
                                    <div class="form_items">
                                    	<div class="form_items_left">Danh mục cha</div>
                                        <div class="form_items_right">
                                        	<select name="main_id">
                                                <option value="1" <?php if($data['info']['Category_id'] == 1){ echo "selected = 'selected'"; }?>>Máy bàn(PC)</option>
                                                <option value="2" <?php if($data['info']['Category_id'] == 2){ echo "selected = 'selected'"; }?>>Laptop</option>
												<option value="3" <?php if($data['info']['Category_id'] == 3){ echo "selected = 'selected'"; }?>>Phụ kiện</option>
                                            </select> 
                                        </div>
                                    </div>
                                
                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right">
										<input type="submit" name="ok"value="Edit Menu" class="padding"  />
                                        <input type="reset" value="Nhập lại" class="padding"  />
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