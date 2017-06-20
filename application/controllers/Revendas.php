<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Revendas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		trava();
	}
	public function index(){
		$saida['registro'] = $this->sdb->getRevendas()->result_array();
		$saida['clientes'] = $this->sdb->getClientes()->result_array();
		$this->load->view('shared/topo');
		$this->load->view('revendas_view', $saida);
		$this->load->view('shared/rodape');
	}
}