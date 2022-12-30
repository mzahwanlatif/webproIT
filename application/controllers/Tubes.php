<?php
	defined('BASEPATH') OR exit('No direct script access alowed');

	class Tubes extends CI_Controller {
		function __construct(){
			parent::__construct();
		}

		public function index(){
			$data = [];
			$this->load->view('tubes');
			
		}
	}
?>