'use strict';
angular.module('agenda')
	.service('EstadoCuentaService', ['$rootScope', '$http', '$q',
		function ($rootScope, $http, $q) {
			return {
				get: function (params, relations) {
					var deferred = $q.defer();
					$http.get("api/users", {
						params: {
							params: params,
							'relations[]': relations
						},
					}).success(function (response) {
						deferred.resolve(response);
					}).error(function (response) {
						deferred.reject(response);
					});
					return deferred.promise;
				},

			}
		}
	]);
