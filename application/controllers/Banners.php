<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends CI_Controller {
	public function __construct(){
		parent::__construct();
		trava();
	}
	public function index(){
		$saida['registro'] = $this->sdb->getBanners()->result_array();
		$this->load->view('shared/topo');
		$this->load->view('banners_view', $saida);
		$this->load->view('shared/rodape');
	}
}