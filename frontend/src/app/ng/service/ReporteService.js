'use strict';
angular.module('agenda')
	.service('ReporteService', ['$rootScope', '$http', '$q',
		function ($rootScope, $http, $q) {
			return {
				get: function () {
					var deferred = $q.defer();
					deferred.resolve({
						status: 'success',
						data: [{
							id:1,
							nombre: 'Julio Cesar',
							base: 'pendiente',
							bonos: 'pendiente',
							comisiones: 'pendiente',
							ajuste_ppp: 'pendiente',
							ajuste_6: 'pendiente',
							no_sujeto: 'pendiente',
							imss: 'pendiente',
							sgmm: 'pendiente',
							infonavit: 'pendiente',
							total: 'pendiente',
							equipo: 'pendiente',
							puesto: 'pendiente',
							autorizado: 1
						},{
							id:3,
							nombre: 'algo',
							base: 'algo',
							bonos: 'algo',
							comisiones: 'algo',
							ajuste_ppp: 'algo',
							ajuste_6: 'algo',
							no_sujeto: 'algo',
							imss: 'algo',
							sgmm: 'algo',
							infonavit: 'algo',
							total: 'algo',
							equipo: 'algo',
							puesto: 'algo',
							autorizado: 0
						}]
					});
					return deferred.promise;
				},

			}
		}
	]);
