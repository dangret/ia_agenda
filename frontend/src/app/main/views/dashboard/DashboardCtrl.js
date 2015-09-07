"use strict";
angular.module('agenda')
	.controller('DashboardCtrl', ['$rootScope', '$scope', '$routeParams', 'StatService',
		function ($rootScope, $scope, $routeParams, StatService) {
			$scope.stats = {};
			$scope.chart = {};
			$scope.period = 'dialy';
			$scope.reloadStats = function () {
				StatService.getStats($scope.period, 'contacts').then(function (response) {
					var stats = response.data;

				 	$scope.chart.stats = [];
				 	var format;
				 	switch($scope.period){
				 		case 'yearly': format = 'YYYY'; break;
				 		case 'monthly': format = 'MMM - YYYY'; break;
				 		case 'dialy': format = 'h a'; break;
				 	}
				 	_.each(_.groupBy(stats, 'x'),function(points, index){
				 		var plot = {};
				 		switch($scope.period){
				 			case 'yearly': plot.y = moment().month(index).format(format); break;
				 			case 'monthly':plot.y = moment().day(index).format(format); break;
				 			case 'dialy':  plot.y = moment().hour(index).format(format); break;
				 		}	
				 		_.each(points, function(point, jindex){
				 			plot[point.method] = point.times;
				 		});
				 		$scope.chart.stats.push(plot);
				 	});
				 	$scope.stats = _.map($scope.chart.stats, function(stat){
				 		return {stat.method: stat.times};
				 	});
				 	console.log($scope.stats);
				})
			}
			$scope.chart = {
				colors: ["#31C0BE", "#F7254E",'#A7F4E', '#C7254F'],
				parseTime:false,
				stats: [{
					y: "5",
					a: 100,
					b: 90
				}, {
					y: "6",
					a: 75,
					b: 65
				}, {
					y: "7",
					a: 50,
					b: 40
				}, {
					y: "8",
					a: 75,
					b: 65
				}, {
					y: "2010",
					a: 50,
					b: 40
				}, {
					y: "2011",
					a: 75,
					b: 65
				}, {
					y: "2012",
					a: 100,
					b: 90
				}]
			};

			$scope.reloadStats();
		}
	]);
