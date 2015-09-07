'use strict';
angular.module('agenda')
	.service('RolService', ['$rootScope', '$http', '$q', 'NotificationService',
		function ($rootScope, $http, $q, NotificationService) {
			return {
				get: function (params) {
					var deferred = $q.defer();
					$http.get("api/rols", {
						params: params
					}).success(function (response) {
						deferred.resolve(response);
					}).error(function (response) {
						deferred.reject(response);
					});
					return deferred.promise;
				},
				save: function (rol) {
					var deferred = $q.defer();
					$http.post("api/rols/save", rol)
						.success(function (response) {
							deferred.resolve(response);
						}).error(function (response) {
							deferred.reject(response);
						});
					return deferred.promise;
				},
				delete: function (id) {
					var deferred = $q.defer();
					$http.post("api/rols/delete", {
						id: id,
					}).success(function (response) {
						deferred.resolve(response);
					}).error(function (response) {
						deferred.reject(response);
					});
					return deferred.promise;
				},
				setActive: function (id, active) {
					var deferred = $q.defer();
					$http.post("api/rols/active", {
						id: id,
						active: active
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
