<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class Buy_ticket extends CI_Controller {
		function __construct(){
			parent::__construct();
		}

		public function index(){
			$data = [];
			$this->load->view('buy_ticket');
			
		}
	}
?>