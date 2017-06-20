<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		if($this->session->flashdata("msg") != ""){
			$saida['msg'] = $this->session->flashdata("msg");
		}else{
			$saida['msg'] = false;
		}
		$this->load->view('login_view', $saida);
	}

	public function logar(){
		$dados = $this->input->post();
		$get = $this->sdb->getAcesso($dados);
		if($get){
			geraSessao($get);
			redirect("dashboard");
		}else{
			$this->session->set_flashdata("msg", "Login ou senha incorretos");
			redirect(index_page());
		}

	}

	public function esqueci(){
		$dados = $this->input->post();

		print_r($dados);
	}

	public function logout(){
		session_destroy();
		redirect(index_page());
	}
}
