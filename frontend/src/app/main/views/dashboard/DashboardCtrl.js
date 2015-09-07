"use strict";
angular.module('agenda')
	.controller('DashboardCtrl', ['$rootScope', '$scope', '$routeParams', '$filter',
		function ($rootScope, $scope, $routeParams, $filter) {

			$scope.chart = {
				colors: ["#31C0BE", "#C7254E"],
				data: [{
					y: "2006",
					a: 100,
					b: 90
				}, {
					y: "2007",
					a: 75,
					b: 65
				}, {
					y: "2008",
					a: 50,
					b: 40
				}, {
					y: "2009",
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
			}
		}
	]);
