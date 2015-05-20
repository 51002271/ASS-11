				<div class="section">
                <script type="text/javascript">
					function checkmenu(){
						var form = document.sac;
						if(form.menu.value == ""){
							alert("Vui lòng nhập Tiêu đề");
							form.menu.focus();
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
								<h2 class="menu_title">Thêm mới danh mục</h2>
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
									<form action="index.php?mod=menu&act=add" method="post" name="sac" onsubmit="return checkmenu()" enctype="multipart/form-data">
                            		<div class="form_items">
                                    	<div class="form_items_left">Tiêu đề</div>
                                        <div class="form_items_right"><input type="text" name="menu" id="menu" size="30" class="text" /></div>
                                    </div>
                                  
                                 
                                    <div class="form_items">
                                    	<div class="form_items_left">Danh mục cha</div>
                                        <div class="form_items_right">
                                        	<select name="main_id" id="main_id">
                                            	<option value="1">Máy bàn(PC)</option>
                                            	<option value="2">Laptop</option>
												<option value="3">Phụ kiện</option>                                                   
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right"><input type="submit" name="ok" value="Add Menu" class="padding"  />
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