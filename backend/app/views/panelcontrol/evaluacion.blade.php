<div class="row">
	<div class="col-xs-12">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-12">

						<h1 class="purple" ><b> Evaluación KPI's</b></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="main-box">
					<header class="main-box-header clearfix">
						<h2>Filtros</h2>
					</header>

					<div class="main-box-body clearfix">
						<form role="form">
							<div class="row">
								<div class="form-group col-xs-3">
									<input type="text" class="form-control" placeholder="Nombre">
								</div>
								<div class="form-group col-xs-3">
									<input type="text" class="form-control" placeholder="¨Puesto">
								</div>
								<div class="form-group col-xs-3">
									<input type="text" class="form-control" placeholder="Mes">
								</div>
								<div class="form-group col-xs-3">
									<input type="text" class="form-control" placeholder="Año">
								</div>
							</div>
							
						</form>
					</div>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="main-box">
					<header class="main-box-header clearfix ">
						<button class="btn btn-success pull-right btn-purple" >Descargar</button>
					</header>
					
					<div style="padding: 20px;">
						<table datatable class="table table-hover" width="100%">
							<thead>
								<tr>
									<th>Nombre</th>
									<th>Puesto</th>
									<th>Mes</th>
									<th>Año</th>
									<th>% KPI´S</th>
									<th>Editar</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Alberto Leal</td>
									<td>Analista</td>
									<td>Ago</td>
									<td>2015</td>
									<td><input type="text" class="text-center" value="0"></td>
									<td>
										<a href="#" class="table-link">
											<span class="fa-stack">
												<i class="fa fa-square fa-stack-2x"></i>
												<i class="fa fa-pencil fa-stack-1x fa-inverse yellow-bg"></i>
											</span>
										</a>
									</td>
								</tr>
								<tr>
									<td>Roberto Gonzalez</td>
									<td>Soporte</td>
									<td>Ago</td>
									<td>2015</td>
									<td><input type="text" class="text-center" value="0"></td>
									<td>
										<a href="#" class="table-link ">
											<span class="fa-stack">
												<i class="fa fa-square fa-stack-2x "></i>
												<i class="fa fa-pencil fa-stack-1x fa-inverse yellow-bg"></i>
											</span>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>	
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="main-box">
					<div class="main-box-body clearfix">
						<form role="form">
							<div class="row">
								<div class="col-xs-offset-8 col-xs-4 text-right">
									<button ng-click="save()" class="btn btn-success btn-purple" style="margin-top: 20px;">Guardar</button>
								</div>
							</div>
							
						</form>
					</div>
				</div>
			</div>	
		</div>
	


	</div>
</div>		