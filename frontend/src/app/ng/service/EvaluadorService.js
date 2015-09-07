'use strict';
angular.module('agenda')
	.service('EvaluadorService', ['$rootScope', '$http', '$q',
		function ($rootScope, $http, $q) {
			return {
				get: function () {
					var deferred = $q.defer();
					$http.get("api/evaluacion").success(function (response) {
						deferred.resolve(response);
					}).error(function (response) {
						deferred.reject(response);
					});
					return deferred.promise;
				},
				save: function (data) {
					var deferred = $q.defer();
					$http.post("api/evaluacion/save", data)
						.success(function (response) {
							deferred.resolve(response);
						}).error(function (response) {
							deferred.reject(response);
						});
					return deferred.promise;
				},
				delete: function (id) {
					var deferred = $q.defer();
					$http.post("api/users/delete", {
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
					$http.post("api/users/active", {
						id: id,
						active: active
					}).success(function (response) {
						deferred.resolve(response);
					}).error(function (response) {
						deferred.reject(response);
					});
					return deferred.promise;
				},
				fieldExists: function (field, value, id) {
					var deferred = $q.defer();
					$http.post("api/users/field-exists", {
						id: id,
						field: field,
						value: value
					}).success(function (response) {
						deferred.resolve(response.isValid);
					}).error(function (response) {
						deferred.reject(response);
					});
					return deferred.promise;
				},
			}
		}
	]);
