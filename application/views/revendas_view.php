<div class="col-md-12 gamb">
	<div class="col-md-4 cabecalho">Revendas Disponíveis:</div>
	<form action="" class="filtros form-inline col-md-6">
		<select name="filtro" class="form-control">
			<option value="">Selecione o cliente:</option>
			<?php
			foreach($clientes as $rc){
				echo '<option value="'.$rc['cl_codigo'].'">'.$rc['cl_nome'].'</option>';
			} ?>
		</select>
	</form>
</div>

<div class="col-md-12 well">
	<?php if(count($registro) > 0){ ?>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Preview</th>
				<th>Revenda</th>
				<th>Cliente</th>
				<th>Ações</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach($registro as $row){ ?>
				<tr>
					<td><img src="" width="90" height="90" alt=""></td>
					<td><?php echo $row['re_revenda']; ?></td>
					<td><?php echo $row['cl_nome']; ?></td>
					<td>
						<button class="btn btn-warning editar"><i class="fa fa-edit"></i> Editar</button>
						<button class="btn btn-danger exc"><i class="fa fa-trash"></i> Excluir</button>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php }else{ ?>
		<h4 class="alert alert-danger">Nenhum registro encontrado</h4>
	<?php } ?>
</div>