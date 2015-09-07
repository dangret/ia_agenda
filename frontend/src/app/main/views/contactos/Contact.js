"use strict";
angular.module('agenda')
	.factory('Contact', ['$resource', 'config',
		function ($resource, config) {
			return $resource(config.apiUrl + 'contacts/:id', {id:'@id'}, {
				update: {
					method: 'PUT'
				}
			});
		}
	]);
