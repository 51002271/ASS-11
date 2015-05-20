<?php
	class libraries_products extends database{
		protected $_table = "laptop";
		public function add_pro($data){
			$table = $this->_table;
			$col = implode(",",array_keys($data));
			$arr = array_values($data);
			foreach($arr as $arr2){
				$arr3[] = "'$arr2'";
			}
			$val = implode(",",$arr3);
			$sql = "insert into $table($col) values($val)";
			$this->query($sql);
		}
		public function total_pro(){
			$sql = "select * from $this->_table";
			$this->query($sql);
			return $this->num_rows();
		}
		public function list_pro($start,$limit){
			$sql = "select * from $this->_table order by Id DESC limit $start,$limit";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function list_cate(){
			$sql = "select * from tbl_category";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function del_pro($table,$id){
			$sql = "delete from $this->_table where Id = '$id'";
			$this->query($sql);
		}
		public function update_pro($data,$id){
			foreach($data as $k => $v){
				$arr[] = "$k = '$v'";
			}
			$col = implode(",",$arr);
			$sql = "update $this->_table set $col where Id = '$id'";
			$this->query($sql);
		}
		public function getdata($id){
			$sql = "select * from $this->_table where Id = '$id'";
			$this->query($sql);
			return $this->fetch();
		}
	}
?>