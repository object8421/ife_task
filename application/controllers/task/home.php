<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends MY_Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->task1();
	}
	
	
	function task1() {
		$this->load->view("task/task1_view");
	}
	
	function shopnc() {
		$this->load->view("task/shopnc_view");
	}

}

