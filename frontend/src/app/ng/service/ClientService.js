'use strict';
angular.module('agenda')
	.factory('ClientService', ['$rootScope', '$http', '$q',
		function ($rootScope, $http, $q) {
			var setTaskStates = function (task) {
				task.pivot.selected = task.pivot.selected == 1 ? true : false; 
				switch (task.pivot.status) {
					case 'COMPLETADO':
						task.pivot.isEnable = false;
						task.pivot.percent = 100;
						task.pivot.selected = true;
						break;
					case 'NA':
						task.pivot.percent = 100;
						task.pivot.isEnable = true;
						break;
					case 'SOLICITADO':
						task.pivot.percent = 25;
						task.pivot.isEnable = false;
						task.pivot.selected = false;
						break;
					case 'RECIBIDO':
						task.pivot.percent = 50;
						task.pivot.isEnable = false;
						task.pivot.selected = false;
						break;
					case 'REVISADO':
						task.pivot.percent = 75;
						task.pivot.isEnable = true;
						task.pivot.selected = false;
						break;
				}
			}

			return {
				client: {},
				userOwner: {},
				statuses: [
					'PROSPECTUS',
					'CUSTOMER',
					'LAST CUSTOMER'
				],
				lead_sources: [
					'ADVERTISEMENT',
					'CL213.INFUSIONSOFT.COM',
					'DIRECT MAIL',
					'FINDCALIFORNIAHOMEVALUES.COM',
					'HOME VALUE TOOL - ENGLISH',
					'INFUSIONSOFT MOBILE APP',
					'ONLINE - ORGANIC SEARCH ENGINE',
					'ONLINE - PAY PER CLICK',
					'RADIO, REFERRAL - CLIENTS',
					'REFERRAL - EMPLOYEE',
					'REFERRAL - FROM AFFILIATE/PARTNER',
					'REFERRAL - FROM CUSTOMER',
					'REFERRAL - REALTOR',
					'REFERRAL - SPHERE',
					'SINNEG.TEAMWORK.COM',
					'TRADE SHOW',
					'TV',
					'WEBSITE - CONTACT US - ENGLISH',
					'WEBSITE - CONTACT US - SPANISH',
					'WEBSITE - OPT IN - ENGLISH',
					'WEBSITE - OPT IN - SPANISH',
					'YELLOW PAGES',
				],
				person_types: [
					'PROSPECT',
					'CUSTOMER',
					'PARTNER',
					'PERSONAL CONTACT',
					'VENDOR',
					'AGENT ',
					'EMPLOYEE ',
				],
				campaigns: [
					'campaña ',
					'campaña ',
					'campaña ',
					'campaña ',
					'campaña ',
					'campaña ',
					'campaña ',
				],
				getTasksCounters: function (tasks) {
					var task_counts_types = _.countBy(tasks, function (task) {
						return task.pivot.status;
					});
					if (!task_counts_types.COMPLETADO) task_counts_types.COMPLETADO = 0;
					task_counts_types.LEFT = tasks.length - task_counts_types.COMPLETADO;
					return task_counts_types;
				},
				getStates: function (tasks) {
					if (!angular.isArray(tasks)) return setTaskStates(tasks);

					angular.forEach(tasks, function (task) {
						setTaskStates(task);
					});

					return tasks;
				},
				statusLogic: function (task) {
					switch (task.pivot.status) {
						case "NA":
							task.pivot.percent = 100;
							break;
						case "REVISADO":
							task.pivot.status = 'COMPLETADO';
							setTaskStates(task);
							break;
					}
					return task;
				},
				getAverage: function (tasks) {
					var sum = 0;
					var average = 0;
					angular.forEach(tasks, function (task) {
						sum += task.pivot.percent;
					})
					average = sum / tasks.length;
					average = parseFloat(accounting.toFixed(average, 2));
					return average;
				},
				getMessages: function (params, relations) {
					var deferred = $q.defer();
					$http.get('api/activities', {
						params: {
							params: params,
							"relations[]": relations
						}
					}).success(function (response) {
						deferred.resolve(response.data);
					}).error(function (response, status) {
						deferred.reject(response, status);
					})
					return deferred.promise;
				},
				addMessage: function (task, message, type) {
					var deferred = $q.defer();
					$http.post('api/activities/add-comment', {
						task: task,
						message: message,
						type: type,
					}).success(function (response) {
						deferred.resolve(response.data);
					}).error(function (response, status) {
						deferred.reject(response, status);
					})
					return deferred.promise;
				},
				save: function (client, transaction) {
					var deferred = $q.defer();
					$http.post('api/client/save', {
						client: client,
						transaction: transaction
					}).success(function (response) {
						deferred.resolve(response.data);
					}).error(function (response, status) {
						deferred.reject(response, status);
					})

					return deferred.promise;
				},
				saveTask: function (task) {
					var deferred = $q.defer();
					$http.post('api/transactions/save-task', {
						task: task,
					}).success(function (response) {
						deferred.resolve(response.data);
					}).error(function (response, status) {
						deferred.reject(response, status);
					})

					return deferred.promise;
				}
			}
		}
	]);
