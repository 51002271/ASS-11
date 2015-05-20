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
								<h2 class="menu_title">Danh sách Menu</h2>
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
								<li><a href="<?php echo base_url; ?>admin/index.php?mod=cate&act=add" name=""><span><span>Thêm mới</span></span></a></li>
							</ul>
							
							</div>
							
							<div class="table_wrapper">
								<div class="table_wrapper_inner" id="tab1">
                            <form action="" method="post" name="sac">
								<table cellpadding="0" cellspacing="0" width="905">
									<tbody><tr>
										<th width="23"><a href="#">Stt</a></th>
									  <th width="185"><a href="#">Tên Menu</a></th>
									  <th width="236"><a href="#">Thư mục</a></th>
					
									  <th width="64"><a href="#">Actions</a></th>
									</tr>
                                    <?php
									if($data['list'] != NULL){
										$stt = 0;
										foreach($data['list'] as $items){
											$stt++;
											if($stt % 2 == 0){
												echo "<tr class='second'>";
												echo "<td>$stt</td>";
												echo "<td>".$items['Name']."</td>";
												echo "<td>".$items['table_data']."</td>";
									
												echo "<td>";
													echo "<div class='actions_menu'><ul>";
														echo "<li><a href='index.php?mod=cate&act=edit&mid=".$items['Id']."' class='edit'>Edit</a></li>";
														echo "<li><a href='index.php?mod=cate&act=del&mid=".$items['Id']."' class='delete' onclick='return check()'>Del</a></li>";
													echo "</ul></div>";
												echo "</td>";
												echo "</tr>";
											}else{
												echo "<tr class='first'>";
												echo "<td>$stt</td>";
												echo "<td>".$items['Name']."</td>";
												echo "<td>".$items['table_data']."</td>";
				
												echo "<td>";
													echo "<div class='actions_menu'><ul>";
														echo "<li><a href='index.php?mod=cate&act=edit&mid=".$items['Id']."' class='edit'>Edit</a></li>";
														echo "<li><a href='index.php?mod=cate&act=del&mid=".$items['Id']."' class='delete' onclick='return check()'>Del</a></li>";
													echo "</ul></div>";
												echo "</td>";
												echo "</tr>";
											}
										}
									}else{
										echo "<tr>";
										echo "<td colspan='8'>Không có dữ liệu</td>";
										echo "</tr>";
									}
									?>
								</tbody></table>
                            </form>
                            	<div id="pagination"><?php echo $data['pagelist'];?></div>
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