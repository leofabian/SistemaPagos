<div class="row">
	<div class="col-md-12">
		<div class="btn-group pull-right">
			<a href="index.php?view=nuevoempleado" class="btn btn-default"><i class='fa fa-smile-o'></i> Nuevo Empleado</a>
			<div class="btn-group pull-right">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-download"></i> Descargar <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
				</ul>
			</div>
		</div>
		<h1>Empleados</h1>
		<br>
		<?php

		$empleados = EmpData::getAll();
		if(count($empleados)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
				<thead>
				
					<th>Apellido</th>
					<th>Nombre</th>					
					<th>Género</th>
					<th>Tel</th>
					<th>F-Nacim</th>
					<th>Cargo</th>
					<th>Salario</th>					
					<th></th>
				</thead>
				<?php
				foreach($empleados as $empleado){
					?>
					<tr>
						<td><?php echo $empleado->apellido; ?></td>
						<td><?php echo $empleado->nombre; ?></td>
						<td><?php echo $empleado->genero; ?></td>						
						<td><?php echo $empleado->telef1; ?></td>
						<td><?php echo $empleado->fechanac; ?></td>
						<td><?php echo $empleado->departamento; ?></td>
						<td><?php echo $empleado->posicion; ?></td>
						<td><?php echo $empleado->salario; ?></td>
						<td style="width:130px;">
							<a href="index.php?view=editarempleado&id=<?php echo $empleado->id;?>" class="btn btn-warning btn-xs">Editar</a>
							<a href="index.php?view=eliminarempleado&id=<?php echo $empleado->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
						</td>
					</tr>
					<?php

				}



			}else{
				echo "<p class='alert alert-danger'>No hay empleados</p>";
			}


			?>


		</div>
	</div>