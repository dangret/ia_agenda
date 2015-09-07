"use strict";
angular.module('agenda')
	.controller('modalConfirmCtrl', ['$scope', '$modalInstance', 'msg',
		function ($scope, $modalInstance, msg) {
			$scope.msg = msg;

			$scope.close = function () {
				$modalInstance.dismiss();
			}

			$scope.accept = function () {
				$modalInstance.close(true);
			}
		}
	]);
