'use strict';
angular.module('agenda')
	.service('EmployeeService', ['$rootScope', '$http', '$q', 'NotificationService',
		function ($rootScope, $http, $q, NotificationService) {
			return {
				data: [{
					"name": "Juanito ",
					"id": 1,
					"id_vta": "53",
					"id_rh": "653",
					"last_name": "Suzman",
					"id_rfc": 12123,
					"active": false,
					"rol": {
						"id": 1,
						"name": "GDN"
					},
					"sucursal": {
						"id": 1,
						"abbr": "GDL"
					},
					"rh_data": {
						"training": true,
						"position": null,
						"tab": null,
						"fiscal_entity": 2,
						"fiscal_regime": 2,
						"leadership_team": 2,
						"section": 2,
						"area": 4,
						"subarea": 2,
						"boss": 3,
						"curp": "123",
						"rfc": "123",
						"gender": "Masculino",
						"birthdate": "2015-08-15T00:00:00.000Z",
						"admission_date": "2015-08-07T00:00:00.000Z",
						"birthplace": "123",
						"phone": "1231231",
						"address": "123",
						"colony": "123",
						"zip_code": "123",
						"base_salary": "123",
						"dialy_salary": "123",
						"payment_method": "123",
						"bank_account": "123",
						"clabe": "132",
						"marital_status": "12231"
					},
					"loan_data": {}
				}],
				get: function (params) {
					var deferred = $q.defer();
					console.log(params);
					var data = _.where(this.data, {active: true});
					var response = {
						status: 'success',
						data: data
					}
					deferred.resolve(response);
					return deferred.promise;
				},
				save: function (employee) {
					var deferred = $q.defer();
					$http.post("api/employees/save", {
						employee: employee,
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
			}
		}
	]);
