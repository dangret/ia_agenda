<style>
	.angular-ui-tree-handle {
		background: #f8faff;
		border: 1px solid #dae2ea;
		color: #7c9eb2;
		padding: 10px 10px;
	}
	
	.angular-ui-tree-handle:hover {
		color: #438eb9;
		background: #f4f6f7;
		border-color: #dce2e8;
	}
	
	.angular-ui-tree-placeholder {
		background: #f0f9ff;
		border: 2px dashed #bed2db;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
</style>
<div class="row">
	<div class="col-xs-12">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="purple"><b>Lista de Evaluadores</b></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="main-box clearfix">
					<header class="main-box-header clearfix">
						<div class="row">
							<div class="col-sm-offset-7 col-sm-2">
								<form role="search">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Buscar...">
									</div>
								</form>
							</div>
							<div class="col-sm-2">
								<button class="btn btn-success btn-purple pull-right" ng-click="modal.open()">Nuevo</button>
							</div>
						</div>
					</header>
					<div class="main-box-body clearfix">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12">
								<table datatable dt-options="datatable.options" dt-columns="datatable.columns" dt-instance="datatable.instance" class="table user-list table-hover">
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('modales.add_evaluador')
