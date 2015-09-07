<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">

				<h1 class="purple"><b>Estado Cuenta</b></h1>
				<small class="gray">Periodo del 15 de Julio al 30 de Julio 2015</small>
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
								<div class="form-group col-xs-4">
									<select class="form-control">
										<option value="0">Año</option>
										<option value="1">2015</option>
										<option value="2">2014</option>

									</select>
								</div>
								<div class="form-group col-xs-4 text-center">
									<select class="form-control">
										<option value="0">Desde</option>
										<option ng-repeat="select in selects" value="{{select.id}}">{{select.name}}</option>
									</select>
								</div>
								<div class="form-group col-xs-4">
									<select class="form-control">
									<option value="0">Hasta</option>
									<option ng-repeat="select in selects" value="{{select.id}}">{{select.name}}</option>


									</select>	
								</div>
								
							</div>
							
						</form>
					</div>
				</div>
			</div>	
		</div>

		<div class="row">
			<div class="col-lg-9 col-sm-9 col-xs-12">
				<div class="row">
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="main-box infographic-box">
							<i class="fa fa-money purple-bg"></i>
							<span class="headline"><b>Base</b></span>
							<span class="value">
								<span class="timer" data-from="120" data-to="2562" data-speed="1000" data-refresh-interval="50" style="font-size: 25px;">
									${{cotizacion.base | number:2}}
								</span>
							</span>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="main-box infographic-box">
							<i class="fa fa-money purple-bg"></i>
							<span class="headline"><b>Comisiones</b></span>
							<span class="value">
								<span class="timer" data-from="30" data-to="658" data-speed="800" data-refresh-interval="30" style="font-size: 25px;">
									${{cotizacion.comisiones | number:2}}
								</span>
							</span>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="main-box infographic-box">
							<i class="fa fa-money purple-bg"></i>
							<span class="headline"><b>KPI´S</b></span>
							<span class="value">
								<span class="timer" data-from="83" data-to="8400" data-speed="900" data-refresh-interval="60" style="font-size: 25px;">
									${{cotizacion.kpis | number:2}}
								</span>
							</span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="main-box infographic-box">
							<i class="fa fa-money purple-bg"></i>
							<span class="headline"><b>Bonos</b></span>
							<span class="value">
								<span class="timer" data-from="83" data-to="8400" data-speed="900" data-refresh-interval="60" style="font-size: 25px;">
									${{cotizacion.bonos | number:2}}
								</span>
							</span>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="main-box infographic-box">
							<i class="fa fa-money purple-bajo-bg"></i>
							<span class="headline"><b>Ajustes</b></span>
							<span class="value">
								<span class="timer red" data-from="83" data-to="8400" data-speed="900" data-refresh-interval="60" style="font-size: 25px;">
									${{cotizacion.ajustes | number:2}}
									
								</span>
							</span>
						</div>
					</div>
					
				</div>
			</div>	
			
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="main-box infographic-box">
					<i class="fa fa-usd green-dark-bg"></i>
					<span class="headline"><b>Total de Ingreso</b></span>
					<span class="value">
						<span class="timer" data-from="539" data-to="12526" data-speed="1100">
							<br>
							<br>
							
							${{cotizacion.total | number:2}}
							
						</span>
					</span>
				</div>
			</div>
			
		</div>

		<div class="row ">
			<div class="col-md-9 col-lg-10">
				<div class="main-box">
					<div class="row purple-bg">
						<div class="col-md-10">
							<div class="purple-bg">
								<h2 style="color:white; margin-left:10px">Histórico de Ingresos</h2>
								<div class="graph" id="graph-line" style="height: 429px;"></div>
							</div>
						</div>
						<div class="col-md-2" style="color white;">
							<div class="row graph-nice-legend">
								<div class="graph-legend-row col-md-12 col-sm-4">
									<div class="graph-legend-row-inner">
										
									</div>
								</div>
								<div class="graph-legend-row col-md-12 col-sm-4">
									<div class="graph-legend-row-inner">
										<span class="graph-legend-name text-center" style="color: white !important;font-size:20px;">
											<b>INGRESO PROMEDIO</b>
										</span>
										<span class="graph-legend-value text-center" style="font-size: 18px;color: white !important;">
											<b>$25,000.00</b>
										</span>
									</div>
								</div>
								<div class="graph-legend-row col-md-12 col-sm-4">
									<div class="graph-legend-row-inner">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-lg-2">
				<div class="social-box-wrapper">
					<div class="social-box col-md-12 col-sm-4 white-bg" style="border:1px solid #ccc">
						
						<div class="clearfix">
							<span class="social-count purple" style="font-size:16px;"><b>MARGEN BRUTO PROMEDIO</b></span>
						</div>
						<span class="social-name green" style="font-size:22px;"><b>30%</b></span>
					</div>
					<div class="social-box col-md-12 col-sm-4 white-bg" style="border:1px solid #ccc">
						
						<div class="clearfix">
							<span class="social-count purple" style="font-size:16px;"><b>COBRANZA DEL PERIODO</b></span>
						</div>
						<span class="social-name purple" style="font-size:22px;"><b>$3.1 M</b></span>
					</div>
					<div class="social-box col-md-12 col-sm-4 white-bg" style="border:1px solid #ccc">
						
						<div class="clearfix">
							<span class="social-count purple" style="font-size:16px;"><b>PORCENTAJE DE COMISIÓN</b></span>
						</div>
						<span class="social-name yellow" style="font-size:22px;"><b>1.3%</b></span>
					</div>
					<div class="social-box col-md-12 col-sm-4 white-bg" style="border:1px solid #ccc">
						
						<div class="clearfix">
							<span class="social-count purple" style="font-size:16px;"><b>DÍAS PROMEDIO CXC</b></span>
						</div>
						<span class="social-name green" style="font-size:22px;"><b>30%</b></span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="main-box clearfix">
					<div class="main-box-body clearfix">
						<div class="col-md-offset-1 col-md-2 col-sm-6 col-xs-12 pricing-package">
							<div class="pricing-package-inner">
								<div class="package-header purple-bg">
									<h3>BASE</h3>
								</div>
								<div class="package-content" style="min-height:350px;padding-top:10px">
									<div class="package-price" style="border-bottom:1px solid #ccc;line-height:31px;height:85px">
										<p style="font-size: 19px;margin-bottom:0">${{cotizacion.base | number:2}}</p>
										<small class="package-month" style=""><p style="margin-bottom:0;font-size: 11px"><b>Periodo</b></p><p  style="margin-bottom:0;font-size: 8px"> <b>15 de Julio al 30 de Julio 2015</b></p></small>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-2 col-sm-6 col-xs-12 pricing-package">
							<div class="pricing-package-inner">
								<div class="package-header purple-bg">
									
									<h3>COMISIONES</h3>
								</div>
								<div class="package-content" style="min-height:350px;padding-top:10px">
									<div class="package-price" style="border-bottom:1px solid #ccc;line-height:31px;height:85px">
										<p style="font-size: 19px;margin-bottom:0">${{cotizacion.comisiones | number:2}}</p>
										<small class="package-month" style=""><p style="margin-bottom:0;font-size: 11px"><b>Periodo</b></p><p  style="margin-bottom:0;font-size: 8px"> <b>15 de Julio al 30 de Julio 2015</b></p></small>
									</div>
									<div style="margin-top:10px; font-size: 10px;" align="center">
										<p class="blue">$1,000,000.00</p>
										<p class="gray">Cobranza 10 de Julio al 25 de Julio 2015</p>
										<p class="red">20%</p>
										<p class="gray">Utilidad Bruta Acumulada</p>
										<p class="yellow">1.3%</p>
										<p class="gray">Procentaje de Comisiones 15 de Julio al 30 de Julio 2015</p>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-2 col-sm-6 col-xs-12 pricing-package">
							<div class="pricing-package-inner">
								<div class="package-header purple-bg">
									
									<h3>KPI</h3>
								</div>
								<div class="package-content" style="min-height:350px;padding-top:10px">
									<div class="package-price" style="border-bottom:1px solid #ccc;line-height:31px;height:85px">
										<p style="font-size: 19px;margin-bottom:0">${{cotizacion.kpis | number:2}}</p>
										<small class="package-month" style=""><p style="margin-bottom:0;font-size: 11px"><b>Periodo</b></p><p  style="margin-bottom:0;font-size: 8px"> <b>15 de Julio al 30 de Julio 2015</b></p></small>
									</div>
									<div style="margin-top:10px; font-size: 10px;" align="center">
										<p class="green">100%</p>
										<p class="gray">Total</p>
										<p class="yellow">20%</p>
										<p class="gray">Respuesta en Cotización Ingreso Pedidos, Seguimiento Entrega 40%</p>
										<p class="yellow">5%</p>
										<p class="gray">Nivel de Servicio 10%</p>
										<p class="yellow">20%</p>
										<p class="gray">Actitud de Servicio 50%</p>
									</div>	
								</div>

							</div>
			
						</div>

						<div class="col-md-2 col-sm-6 col-xs-12 pricing-package">
							<div class="pricing-package-inner">
								<div class="package-header purple-bg">
								
									<h3>BONOS</h3>
								</div>
								<div class="package-content" style="min-height:350px;padding-top:10px">
									<div class="package-price" style="border-bottom:1px solid #ccc;line-height:31px;height:85px">
										<p style="font-size: 19px;margin-bottom:0">${{cotizacion.bonos | number:2}}</p>
										<small class="package-month" style=""><p style="margin-bottom:0;font-size: 11px"><b>Periodo</b></p><p  style="margin-bottom:0;font-size: 8px"> <b>15 de Julio al 30 de Julio 2015</b></p></small>
									</div>
									<div style="margin-top:10px; font-size: 10px;" align="center">
										<p class="yellow">90%</p>
										<p class="gray">Cumplimiento</p>
										<p class="blue">$900,000.00</p>
										<p class="gray">Venta Trimestral</p>
										<p class="blue">$1,000,000.00</p>
										<p class="gray">Presupuesto Trimestral</p>
										<p>.50%</p>
										<p.class="gray">Procentaje Bono</p>
									</div>
								</div>
							</div>
						
						</div>
						<div class="col-md-2 col-sm-6 col-xs-12 pricing-package">
							<div class="pricing-package-inner">
								<div class="package-header purple-bajo-bg">
								
									<h3>AJUSTES</h3>
								</div>
								<div class="package-content" style="min-height:350px;padding-top:10px">
									<div class="package-price" style="border-bottom:1px solid #ccc;line-height:31px;height:85px">
										<p style="font-size: 19px;margin-bottom:0" class="red">${{cotizacion.ajustes | number:2}}</p>
										<small class="package-month" style=""><p style="margin-bottom:0;font-size: 11px"><b>Periodo</b></p><p  style="margin-bottom:0;font-size: 8px"> <b>15 de Julio al 30 de Julio 2015</b></p></small>
									</div>

									<div style="margin-top:10px; font-size: 10px;" align="center">
										<p class="blue">$-400.00</p>
										<p class="gray">Ajustes Sujetos al cargo Admon. 6% <b>15 de Julio al 30 de Julio 2015</b></p>
										<p class="blue">$-50.00</p>
										<p class="gray">Ajustes NO Sujetos al cargo Admon. 6% <b>15 de Julio al 30 de Julio 2015</b></p>
										<p class="blue">$-32.93</p>
										<p class="gray">PPP <b>15 de Julio al 30 de Julio 2015</b></p>
									</div>
								</div>
							</div>
						
						</div>
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
								<div class="form-group col-xs-4">
									<select class="form-control">
										<option value="0">Periodo</option>
										<option ng-repeat="select in selects" value="{{select.id}}">{{select.name}}</option>
									</select>
								</div>
								<div class="form-group col-xs-4">
									<select class="form-control">
									<option value="0">LN</option>
									<option value="1">PMR</option>
									<option value="2">SPI</option>
									<option value="3">PE</option>
									


									</select>	
								</div>
								<div class="form-group col-xs-4">
									<input type="text" class="form-control" placeholder="Proyecto">
									
								</div>
								
							</div>
							
						</form>
					</div>
				</div>
			</div>	
		</div>


		<div class="row">
			<div class="col-lg-12">
				<div class="main-box clearfix">
					<header class="main-box-header clearfix">
						<h2 class="pull-left">Detalles</h2>

						<div class="filter-block pull-right">
							<!-- <div class="form-group pull-left">
								<input type="text" class="form-control" placeholder="Search...">
								<i class="fa fa-search search-icon"></i>
							</div> -->

							<a href="#" class="btn btn-primary pull-right gray-bg" style="border-color:#95a5a6 ;">
								 Factura
							</a>
						</div>
					</header>

					<div class="main-box-body clearfix">
						<div class="table-responsive clearfix">
							<table class="table table-hover">
								<thead>
									<tr>
										<th class="text-center">Cliente</th>
										<th class="text-center">ID</th>
										<th class="text-center">Periodo</th>
										<th class="text-center">LN</th>
										<th class="text-center">Proyecto</th>
										<th class="text-center">Cargo</th>
										<th class="text-center">Abonos</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="text-center">pendiente</td>
										<td class="text-center">637</td>
										<td class="text-center">15 Jul - 30 Jul 2015</td>
										<td class="text-center">PMR</td>
										<td class="text-center">AXXA PIR</td>
										<td class="text-center">-</td>
										<td class="text-right">$8,000.00</td>
									</tr>
									<tr>
										<td class="text-center">pendiente</td>
										<td class="text-center">649</td>
										<td class="text-center">15 Jul - 30 Jul 2015</td>
										<td class="text-center">SPI</td>
										<td class="text-center">SPI ONLINE CONTINENTAL</td>
										<td class="text-center">-</td>
										<td class="text-right">$2,000.00</td>
									</tr>
									<tr>
										<td class="text-center">pendiente</td>
										<td class="text-center">710</td>
										<td class="text-center">15 Jul - 30 Jul 2015</td>
										<td class="text-center">PE</td>
										<td class="text-center">SKY VODKA</td>
										<td class="text-center">-</td>
										<td class="text-right">$3,000.00</td>
									</tr>
								</tbody>
								<tfoot>
									<td colspan="5"></td>
									<td class="text-right"><b>Sub Total:</b></td>
									<td class="text-right"><b>$13,000.00</b></td>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>