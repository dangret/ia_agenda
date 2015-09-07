"use strict";
angular.module('agenda')
	.directive('timer', [
		function () {
			return {
				link: function (scope, elem, attr) {
					elem.countTo({});
				}
			}
		}
	]);
