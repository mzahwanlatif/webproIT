<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class Welcome_message extends CI_Controller {
		function __construct(){
			parent::__construct();
		}

		public function index(){
			$data = [];
			$this->load->view('welcome_message');
			
		}
	}
?>