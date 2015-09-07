"use strict";
angular.module('agenda')
	.controller('ContactDataCtrl', ['config', '$rootScope', '$scope', '$modalInstance', 'contact', 'type',
		function (config, $rootScope, $scope, $modalInstance, contact, type) {
			$scope.contact = contact ? contact : {};
			$scope.type = type;
			$scope.uploader = {};
			if ($scope.contact && $scope.contact.photo) {
				console.log($scope.contact);
				var blob = null;
				var xhr = new XMLHttpRequest();
				xhr.open("GET", config.baseUrl + $scope.contact.photo);
				xhr.responseType = "blob"; //force the HTTP response, response-type header to be blob
				xhr.onload = function () {
					blob = xhr.response; //xhr.response is now a blob object
					blob.relativePath = $scope.contact.photo;
					blob.name = _.last($scope.contact.photo.split('/'));
					var reader = new window.FileReader();
					$scope.uploader.flow.addFile(blob);
				}
				xhr.send();
			}

			$scope.flowOptions = {
				target: config.apiUrl + 'img/temp',
				singleFile: true,
			};

			$scope.change = function () {
				console.log($scope.contact.rhdata.trainee);
			};

			$scope.save = function () {
				$rootScope.confirmDialog('¿Desea guardar los cambios?').result.then(function () {
					$modalInstance.close($scope.contact);
				});
			};

			$scope.tempAdded = function ($file, $message, $flow) {
				var url = JSON.parse($message).url
				$scope.contact.photo = url;
			}

			$scope.close = function () {
				$modalInstance.dismiss($scope.contact);
			};

			$scope.validateUrls = {
				phone: config.apiUrl + "contacts/field-exists/phone/" + $scope.contact.id,
				email: config.apiUrl + "contacts/field-exists/email/" + $scope.contact.id
			}
		}
	]);
