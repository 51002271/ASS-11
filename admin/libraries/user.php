<?php
	class libraries_user extends database{
		protected $_table = "customer";
		public function check_login($user,$pass){
			$sql = "select * from $this->_table where Username= '$user' && Password= '$pass'";
			$this->query($sql);
			if($this->num_rows() == 0){
				return FALSE;
			}else{
				return $this->fetch();
			}
		}
		public function add_user($data){
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
		public function total_user(){
			$sql = "select * from $this->_table";
			$this->query($sql);
			return $this->num_rows();
		}
		public function check_user_name($name,$id=""){
			if($id!=NULL){
				$sql = "select Username from $this->_table where Username = '$name' and Id != '$id'";
			}else{
				$sql = "select Username from $this->_table where Username = '$name'";
			}
			$this->query($sql);
			if($this->num_rows() == 0){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		public function check_user_email($email,$id=""){
			if($id!=NULL){
				$sql = "select Email from $this->_table where Email = '$email' and Id != '$id'";
			}else{
				$sql = "select Email from $this->_table where Email = '$email'";
			}
			$this->query($sql);
			if($this->num_rows() == 0){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		public function list_user($start,$limit){
			$sql = "select * from $this->_table order by Id DESC limit $start,$limit";
			$this->query($sql);
			return $this->fetchAll();
		}
		public function del_user($table,$id){
			$sql = "delete from $this->_table where Id = $id and Id != 1 ";
			$this->query($sql);
		}
		public function update_user($data,$id){
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