'use strict';
angular.module('agenda')
	.factory('ResolveSesionService', ['$rootScope', '$http', '$q', 'SesionService',
		function ($rootScope, $http, $q, SesionService) {
			return $http.get("api/sesion/auth").success(function (response) {
				console.log('u.u');
				SesionService.user = response.user; 
			});
		}
	]);
