<?php
function trava(){
	if(empty($_SESSION['ac_login'])){
		redirect('login/logout');
	}
}

function crypto($log,$snh){
	return sha1(md5($log).":".md5($snh));
}

function geraSessao($dados){
	foreach($dados as $k => $v){
		$_SESSION[$k] = $v;
	}
}

function gravaHistorico($acao,$material){
	$ci =& get_instance();
	$inp = array(
		'hi_usuario' => $_SESSION['ac_codigo'],
		'hi_nivel' => $_SESSION['ac_nivel'],
		'hi_acao' => $acao,
		'hi_material' => $material,
	);
	$ci->db->insert("historico",$inp);
}