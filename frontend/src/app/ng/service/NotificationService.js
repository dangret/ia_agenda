'use strict';
angular.module('agenda')
	.factory('NotificationService', ['$rootScope',
		function ($rootScope) {
			return {
				show: function (msg, type) {
					var icon = '';
					switch (type) {
						case 'notice':
							icon = '<span class="icon fa fa-bullhorn fa-2x"></span>'
							break;
						case 'warning':
							icon = '<span class="icon fa fa-bullhorn fa-2x"></span>'
							break;
						case 'error':
							icon = '<span class="icon fa fa-bullhorn fa-2x"></span>'
							break;
						case 'success':
							icon = '<span class="icon fa fa-check fa-2x"></span>'
							break;
					}
					if (this.notification) this.notification.dismiss();
					this.notification = new NotificationFx({
						message: icon + '<p>' + msg + '</p>',
						layout: 'bar',
						effect: 'slidetop',
						ttl: 5000,
						type: type, //notice, warning, error, success
						onClose: function () {}
					});

					this.notification.show();
				}
			}
		}
	]);
