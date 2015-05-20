<?php
	class libraries_menu extends database{
		protected $_table = "category_detail";
	
		public function add_menu($data){
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
		public function check_menu($name,$id=""){
			if($id!=NULL){
				$sql = "select Name from $this->_table where Name = '$name' and Id != '$id'";
			}else{
				$sql = "select Name from $this->_table where Name = '$name'";
			}
			$this->query($sql);
			if($this->num_rows() == 0){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		public function total_menu(){
			$sql = "select * from $this->_table";
			$this->query($sql);
			return $this->num_rows();
		}

		public function list_menu($start,$limit){
			$sql = "select * from $this->_table order by Id DESC limit $start,$limit";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function del_menu($table,$id){
			$sql = "delete from $this->_table where Id = $id";
			$this->query($sql);
		}
		public function update_menu($data,$id){
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