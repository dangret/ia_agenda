<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active"><span>Dashboard</span></li>
				</ol>
				<h1>Dashboard</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="main-box infographic-box">
					<i class="fa fa-user red-bg"></i>
					<span class="headline">Users</span>
					<span class="value">
						<span class="timer" data-from="120" data-to="2562" data-speed="1000" data-refresh-interval="50">
							2562
						</span>
					</span>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="main-box infographic-box">
					<i class="fa fa-shopping-cart emerald-bg"></i>
					<span class="headline">Purchases</span>
					<span class="value">
						<span class="timer" data-from="30" data-to="658" data-speed="800" data-refresh-interval="30">
							658
						</span>
					</span>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="main-box infographic-box">
					<i class="fa fa-money green-bg"></i>
					<span class="headline">Income</span>
					<span class="value">
						&#36;<span class="timer" data-from="83" data-to="8400" data-speed="900" data-refresh-interval="60">
							8400
						</span>
					</span>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 col-xs-12">
				<div class="main-box infographic-box">
					<i class="fa fa-eye yellow-bg"></i>
					<span class="headline">Monthly Visits</span>
					<span class="value">
						<span class="timer" data-from="539" data-to="12526" data-speed="1100">
							12526
						</span>
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="main-box">
					<div class="row">
						<div class="col-md-9">
							<div class="graph-box emerald-bg">
								<h2>Sales &amp; Earnings</h2>
								<div line-chart line-data='chart.data' line-xkey='y' line-ykeys='["a", "b"]' line-labels='["Serie A", "Serie B"]' line-colors='chart.colors' grid-line-color='rgba(255, 255, 255, 0.3)' grid-text-color='rgba(255, 255, 255, 0.3)'>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="row graph-nice-legend">
								<div class="graph-legend-row col-md-12 col-sm-4">
									<div class="graph-legend-row-inner">
										<span class="graph-legend-name">Earnings</span>
										<span class="graph-legend-value">382</span>
									</div>
								</div>
								<div class="graph-legend-row col-md-12 col-sm-4">
									<div class="graph-legend-row-inner">
										<span class="graph-legend-name">Orders</span>
										<span class="graph-legend-value">930</span>
									</div>
								</div>
								<div class="graph-legend-row col-md-12 col-sm-4">
									<div class="graph-legend-row-inner">
										<span class="graph-legend-name">New Clients</span>
										<span class="graph-legend-value">894</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="main-box small-graph-box red-bg">
					<span class="value">2.562</span>
					<span class="headline">Users</span>
					<div class="progress">
						<div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar">
							<span class="sr-only">60% Complete</span>
						</div>
					</div>
					<span class="subinfo">
						<i class="fa fa-arrow-circle-o-up"></i> 10% higher than last week
					</span>
					<span class="subinfo">
						<i class="fa fa-users"></i> 29 new users
					</span>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="main-box small-graph-box emerald-bg">
					<span class="value">69.600</span>
					<span class="headline">Visits</span>
					<div class="progress">
						<div style="width: 84%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="84" role="progressbar" class="progress-bar">
							<span class="sr-only">84% Complete</span>
						</div>
					</div>
					<span class="subinfo">
											<i class="fa fa-arrow-circle-o-down"></i> 22% less than last week
										</span>
					<span class="subinfo">
											<i class="fa fa-globe"></i> 84.912 last week
										</span>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12 hidden-sm">
				<div class="main-box small-graph-box green-bg">
					<span class="value">923</span>
					<span class="headline">Orders</span>
					<div class="progress">
						<div style="width: 42%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="42" role="progressbar" class="progress-bar">
							<span class="sr-only">42% Complete</span>
						</div>
					</div>
					<span class="subinfo">
											<i class="fa fa-arrow-circle-o-up"></i> 15% higher than last week
										</span>
					<span class="subinfo">
											<i class="fa fa-shopping-cart"></i> 8 new orders
										</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="main-box">
					<header class="main-box-header clearfix">
						<h2 class="pull-left">Visitors location</h2>
						<div class="icon-box pull-right">
							<a href="#" class="btn pull-left">
								<i class="fa fa-refresh"></i>
							</a>
							<a href="#" class="btn pull-left">
								<i class="fa fa-cog"></i>
							</a>
						</div>
					</header>
					<div class="main-box-body clearfix">
						<div id="world-map" style="width: 100%; height: 400px"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
