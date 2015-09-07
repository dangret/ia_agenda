"use strict";
angular.module('agenda')
	.factory('ErrorResponseService', ['NotificationService',
		function (NotificationService) {
			return function (response) {
				var error = response.error;
				var message = ""
				if (!error) {
					console.log(response);
					return;
				}
				switch (error.type) {
					case 'Illuminate\\Database\\QueryException':
						switch (error.sqlcode) {
							case 1451:
								message = "It can not be deleted because records exist that depend";
								break;
								break;
							case 'Exception':
								break;
							default:
								message = error.message;
						}
						NotificationService(message, 'error');
				}
			}
		}
	]);
