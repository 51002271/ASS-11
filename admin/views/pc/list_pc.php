
				<div class="section">
                <script type="text/javascript">
				
					function check(){
						if(confirm('Bạn có chắc muốn xóa không ?')){
							return true;
						}else{
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
								<h2 class="menu_title">Quản lý sản phẩm</h2>
							</div>
						</div>
						<span class="title_wrapper_bottom"></span>
					</div>
					<!--[if !IE]>end title wrapper<![endif]-->
					
					<!--[if !IE]>start section content<![endif]-->
					<div class="section_content">
						<span class="section_content_top"></span>
						
						<div class="section_content_inner minheight">
                        	<div class="table_tabs_menu">
                            <ul class="table_tabs">
                            	<li><a href="#" name="tab1" class="selected"><span><span>Danh sách</span></span></a></li>
								
								<li><a href="<?php echo base_url."admin/index.php?mod=pc&act=add"; ?>" name=""><span><span>Thêm mới</span></span></a></li>
							</ul>
							<!--[if !IE]>start  tabs<![endif]-->
							<!--[if !IE]>end  tabs<![endif]-->
							</div>
							<!--[if !IE]>start table_wrapper<![endif]-->
							<div class="table_wrapper">
								<div class="table_wrapper_inner" id="tab1">
                            <form action="" method="post" name="sac">
								<table cellpadding="0" cellspacing="0" width="905">
									<tbody><tr>
									  <th width="23">Stt</th>
									  <th width="300"><a href="#">Tên sản phẩm</a></th>
									  <th width="136"><a href="#">Giá tiền</a></th>
									  <th width="132"><a href="#">Bảo hành</a></th>
									  <th width="64"><a href="#">Actions</a></th>
									</tr>
                               <?php
							   	$stt = 0;
								if(isset($data['pro']) && $data['pro'] != NULL){
									foreach($data['pro'] as $items){
										$stt++;
										echo "<tr>";	
										echo "<td>$stt</td>";
										echo "<td>".$items['Name']."</td>";
										echo "<td>".@number_format($items['Price'])."</td>";
										echo "<td>".$items['Warrantee']."</td>";
										echo "<td>";
												echo "<div class='actions_menu'><ul>";
													echo "<li><a href='".base_url."admin/index.php?mod=pc&act=edit&pid=".$items['Id']."' class='edit'>Edit</a></li>";
													echo "<li><a href='".base_url."admin/index.php?mod=pc&act=del&pid=".$items['Id']."' class='delete' onclick='return check()'>Del</a></li>";
												echo "</ul></div>";
											echo "</td>";

										echo "</tr>";
									}
								}else{
									echo "<tr>";	
									echo "<td colspan='5'>Không có Sản phẩm</td>";
									echo "</tr>";
								}
									?>
								</tbody></table>
                            </form>
                            	<div id="pagination"><?php echo $data['pagelist'] ;?></div>
							</div>
                            <div class="table_wrapper_inner" id="tab2">
                            	<div class="form_user">
                            	<form action="javascript:void(0)">
                                	<div class="form_items">
                                    	<div class="form_item_left">Tên sản phẩm</div>
                                        <div class="form_item_right"><input type="text" id="keyword" size="35" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_item_left">&nbsp;</div>
                                        <div class="form_item_right"><input type="submit" id="ok" value="Tìm kiếm" class="padding" /></div>
                                    </div>
                                </form>
                                </div>
                                <div id="user_show"></div>
                            </div>
						</div>
							<!--[if !IE]>end table_wrapper<![endif]-->
						</div>
						<!--[if !IE]>start pagination<![endif]-->
							<div class="pagination_wrapper">
							<span class="pagination_top"></span>
							<div class="pagination_middle">
							<div class="pagination">
								
							</div>
							</div>
							<span class="pagination_bottom"></span>
							</div>
						<!--[if !IE]>end pagination<![endif]-->
						<span class="section_content_bottom"></span>
					</div>
					<!--[if !IE]>end section content<![endif]-->
				</div>
