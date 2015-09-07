'use strict';
angular.module('agenda')
	.factory('SesionService', ['$rootScope', '$http', '$q',
		function ($rootScope, $http, $q) {
			return {
				update: function (auth) {
					$rootScope.$broadcast('updateAuth', auth);
				},
				auth: function () {
					var deferred = $q.defer();
					$http.get("api/sesion/auth")
						.success(function (response) {
							deferred.resolve(response);
						}).error(function (response) {
							deferred.reject(response);
						});
					return deferred.promise;
				},
				logout: function () {
					var deferred = $q.defer();
					$http.get("api/sesion/logout")
						.success(function (response) {
							deferred.resolve(response);
						}).error(function (response) {
							deferred.reject(response);
						});
					return deferred.promise;
				},
				isSomeRol: function (arrayRols) {
					arrayRols = _.map(arrayRols, function (s) {
						return _.isString(s) ? s.toLowerCase() : s;
					});
					console.log('have '+this.user.rol.abbr +', (' + arrayRols + ') rols?. ' + _.contains(arrayRols, this.user.rol.abbr.toLowerCase()));
					return _.contains(arrayRols, this.user.rol.abbr.toLowerCase());
				}
			}
		}
	]);
