<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Plataforma de E-mail Marketing</title>
	<?php $this->load->view('shared/css'); ?>
</head>
<body>
<div class="tudo">
	<div class="container fundo">
		<div class="row">
			<div class="col-md-3 logo-mark text-center">
				<img src="/img/logo-mark.png" alt="">
			</div>
			<div class="col-md-9 banner">
				<img src="" width="700" height="120" alt="Espaço para banner rotativo">
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 menu">
				<ul>
					<li><?php echo anchor('dashboard','<i class="fa fa-home"></i> Home'); ?></li>
					<li><?php echo anchor('materiais','<i class="fa fa-paper-plane"></i> Materiais'); ?></li>
					<li><?php echo anchor('clientes','<i class="fa fa-user"></i> Clientes'); ?></li>
					<li><?php echo anchor('revendas','<i class="fa fa-users"></i> Revendas'); ?></li>
					<li><?php echo anchor('banners','<i class="fa fa-flag"></i> Banner Rotativo'); ?></li>
					<li><?php echo anchor('login/logout','<i class="fa fa-chevron-left"></i> Logout'); ?></li>
				</ul>
			</div>

			<div class="col-md-9">
				<div class="col-md-12 gamb">
					<h3 class="bemvindo"><?php echo $_SESSION['ac_nome']; ?>, seja bem vindo!</h3>
				</div>