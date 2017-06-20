<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_model extends CI_Model {
	function getAcesso($dados){
		$snh = crypto($dados['login'],$dados['passw']);
		$this->db->where("ac_login",$dados['login']);
		$this->db->where("ac_senha",$snh);
		$get = $this->db->get("acessos")->row_array();
		if(count($get) > 0){
			return $get;
		}else{
			return false;
		}
	}

	function getClientes($id=NULL){
		if($id != NULL){ $this->db->where("cl_codigo",$id); }
		return $this->db->get("clientes");
	}

	function getRevendas($id=NULL){
		if($id != NULL){ $this->db->where("re_codigo",$id); }
		$this->db->join("clientes","cl_codigo = re_cliente","left");
		return $this->db->get("revendas");
	}

	function getMateriais($id=NULL){
		if($id != NULL){ $this->db->where("ma_codigo",$id); }
		$this->db->join("clientes","cl_codigo = re_cliente","left");
		return $this->db->get("clientes");
	}

	function getBanners($id=NULL){
		if($id != NULL){ $this->db->where("ba_codigo",$id); }
		$this->db->join("clientes","cl_codigo = ba_cliente","left");
		$this->db->join("revendas","re_codigo = ba_revenda","left");
		return $this->db->get("banners");
	}
}