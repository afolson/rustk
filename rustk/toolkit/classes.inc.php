<?php
//--------------------------------------------------\\
// Created By No1 1000                -  09/06/2005 \\
// Last Edited By No1 1000            -  01/16/2007 \\
//==================================================\\

if(!defined('IN_TIKO')) {
  require('die.php');
}

class sql {

	var $queries = 0;
	var $connect;
	
	function sql_err(){
		die('<textarea rows="20" cols="29">MySQL Error: ' . mysql_error() . '</textarea>');
	}
	
	function connect($host = '', $username = '', $password = ''){
		$this->connect = @mysql_connect($host, $username, $password) or $this->sql_err();
		return $this->connect;
	}
	
	function disconnect(){
		$this->disconnect = @mysql_close($this->connect);
		return $this->disconnect;
	}
	
	function select_db($database = ''){
		$this->select_db = @mysql_select_db($database, $this->connect) or $this->sql_err();
		return $this->select_db;
	}
	
	function query($query = ''){
		$this->result = @mysql_query($query, $this->connect) or $this->sql_err();
		$this->queries++;
		return $this->result;
	}
	
	function fetch_row($query = ''){
		$this->result = @mysql_query($query, $this->connect) or $this->sql_err();
		$this->row = @mysql_fetch_assoc($this->result);
		$this->queries++;
		return $this->row;
	}
	
	function fetch_array($query = ''){
		$this->row = @mysql_fetch_assoc($query);
		return $this->row;
	}
	
	function fetch_array2d($query = '') {
		$i = 1;
		$this->result = array();
		while ($row = mysql_fetch_assoc($query)) {
			foreach ($row as $key => $value) {
				$this->result[$key][$i] = $value;
			}
			$i++;
		}
		return $this->result;
	}
	
	function fetch_object($query = ''){
		$this->row = @mysql_fetch_object($query);
		return $this->row;
	}
	
	function num_rows($query = '') {
		$this->result = @mysql_query($query, $this->connect) or $this->sql_err();
		$this->num_rows = @mysql_num_rows($this->result);
		$this->queries++;
		return $this->num_rows;
	}

	function affected_rows() {
		return mysql_affected_rows($this->connect);
	}
	
	function add_queries($num = 0) {
		$this->queries = $this->queries + $num;
	}
	
	function count_queries() {
		return $this->queries;
	}
}
