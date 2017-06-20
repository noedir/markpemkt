<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Plataforma E-mail Marketing</title>
	<?php $this->load->view('shared/css-login'); ?>
</head>
<body>

<div class="container-fluid topo-login">
	<div class="container">
		<div class="row">
			<div class="col-md-3 text-center logo">
				<img src="<?php echo base_url(); ?>img/logo-mark.png">
			</div>
			<div class="col-md-6 txt-topo">
				<img src="<?php echo base_url(); ?>img/txt-ferramenta.png">
			</div>
			<div class="col-md-3 text-right">
				<ul class="redes-sociais">
					<li><img src="/img/btn-face.png" alt="Foto informativo" title="Acesse nosso Facebook"></li>
					<li><img src="/img/btn-linkedin.png" alt="Foto informativo" title="Acesse no Linkedin"></li>
					<li><img src="/img/btn-email.png" alt="Foto informativo" title="Envie um e-mail para nós"></li>
				</ul>
				<img class="chama-login" src="/img/btn-login.png" alt="Foto informativo" title="Faça o login na sua conta">
			</div>
		</div>
	</div>
</div>

<div class="tela-login" <?php if($msg){ echo 'style="display: block;"'; }?>>
	<div class="box-login">
		<form action="/login/logar" method="post">
			<p>Login: <input required type="text" class="campos-login" name="login"></p>
			<p>Senha: <input required type="password" class="campos-login" name="passw"></p>
			<p><span class="esqueci">Esqueci minha senha</span>
			<input type="submit" class="btn" value="OK"></p>
		</form>
	</div>

	<div class="box-esqueci">
		<form action="/login/esqueci" method="post" name="esqueci">
			<p>Login: <input required type="text" class="campos-login" name="login"></p>
			<p><span class="logar">Entrar no sistema</span>
			<input type="submit" class="btn" value="OK"></p>
		</form>
	</div>
</div>

<div class="rodape-login">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo base_url(); ?>img/selecione.png" alt="Foto informativo" title="Selecione...">
			</div>
			<div class="col-md-4">
				<img src="<?php echo base_url(); ?>img/customize.png" alt="Foto informativo" title="Customize...">
			</div>
			<div class="col-md-4">
				<img src="<?php echo base_url(); ?>img/divulgue.png" alt="Foto informativo" title="Divlgue...">
			</div>
		</div>
	</div>
</div>

<div class="logo-markp"><img src="<?php echo base_url(); ?>img/logo-mark-login.png" alt="Foto informativo" title="Desenvolvedor"></div>

<div class="solucao"><img src="<?php echo base_url(); ?>img/solucao.png" alt="Foto informativo" title="Solução para sua empresa"></div>


<?php
	$this->load->view('shared/js');
	if($msg){
		echo '<script>alert("'.$msg.'");</script>';
	}
?>

</body>
</html>