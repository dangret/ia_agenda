"use strict";
angular.module('agenda')
	.factory('StatService', ['$http', 'config', '$q',
		function ($http, config, $q) {
			return {
				getStats: function (period, resource) {
					var deferred = $q.defer();
					$http.get(config.apiUrl + 'stats/by-date', {
						params: {
							period: period,
							resource: resource,
						}
					}).then(function (response) {
						deferred.resolve(response.data);
					}, function (response) {
						deferred.reject(response);
					});
					return deferred.promise;
				}
			}
		}
	]);
