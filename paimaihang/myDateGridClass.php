<?php
	class myDateGridClass {
		var $sql;
		var $max_line;
		var $begin_record;
		var $total_records;
		var $current_records;
		var $result;
		var $total_pages;
		var $current_page;
		var $arr_page_query;
		
		function myDateGridClass($pmax_line) {
			$this->max_line = $pmax_line;
			$this->begin_record = 0;
		}
		function __destruct(){
			
		}
		function __get($property_name) {
			if(isset($this->$property_name)){
				return($this->$property_name);
			}
			else {
				return null;
			}
		}
		function __set($property_name,$value) {
			$this ->$property_name = $value;
		}
		function read_date() {
			$psql = $this->sql;
			$result = mysql_query($psql) or die (mysql_error());
			$this->total_records = mysql_num_rows($result);
			
			
			
			current_records = mysql_num_rows($result);
			$i = 0;
			while($row = mysql_fetch_array($result)) {
				$this->result[$i] = $row;
				$i++;
			}
		}
	}
?>













