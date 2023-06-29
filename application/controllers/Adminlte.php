<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlte extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/index_tpl.php');
	}
}
