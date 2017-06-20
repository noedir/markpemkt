<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		trava();
	}
	public function index(){
		$this->load->view('shared/topo');
		$this->load->view('site_view');
		$this->load->view('shared/rodape');
	}
}