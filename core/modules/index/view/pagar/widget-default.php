<div class="row">
	<div class="col-md-12">
		<div class="btn-group pull-right">
			<a href="index.php?view=nuevopago" class="btn btn-default"><i class='glyphicon glyphicon-usd'></i> Realizar Pago</a>
			<div class="btn-group pull-right">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-download"></i> Reporte <span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="report/RepPagos.php">Archivo PDF</a></li>
				</ul>
			</div>
		</div>
		<h1>Pagos</h1>
		<br>
		<?php

		$pagosempleado = PayData::getPays();
		if(count($pagosempleado)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
				<thead>
					<th><center>Empleado</th>
					<th><center>Salario</th>
					<th><center>Días Trab.</th>					
					<th><center>Horas Extra</th>
					<th><center>Indemniz.</th>
					<th><center>Adelantos</th>
					<th><center>Descuento</th>
					<th><center>AFP</th>
					<th><center>Seguro</th>
					<th><center>Total</th>
					<th><center>Fecha y Hora</th>
					<th></th>
				</thead>
				<?php
				foreach($pagosempleado as $pagosempleado){
					?>
					<tr>
						<td><center><?php echo $pagosempleado->empleado; ?></td>
						<td><center>$<?php echo $pagosempleado->salario; ?></td>
						<td><center><?php echo $pagosempleado->diastrabajo; ?></td>
						<td><center><?php echo $pagosempleado->horasextra; ?></td>
						<td><center>$<?php echo $pagosempleado->indemniz; ?></td>
						<td><center>$<?php echo $pagosempleado->descuento; ?></td>
						<td><center>$<?php echo $pagosempleado->adelantos; ?></td>
						<td><center><?php echo $pagosempleado->afp; ?>%</td>
						<td><center><?php echo $pagosempleado->seguro; ?>%</td>
						<td><center>$<?php echo $pagosempleado->total; ?></td>
						<td><center><?php echo $pagosempleado->creado_el; ?></td>
						<td style="width:70px;">
							<a href="index.php?view=editarpago&id=<?php echo $pagosempleado->id;?>" class="btn btn-warning btn-xs">Editar</a>						
						</td>
					</tr>
					<?php

				}



			}else{
				echo "<p class='alert alert-danger'>No hay clientes</p>";
			}


			?>


		</div>
	</div>