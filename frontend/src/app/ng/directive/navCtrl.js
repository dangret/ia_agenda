"use strict";
angular.module('agenda')
	.directive('navCtrl', ['$filter',
		function ($filter) {
			return {
				link: function (scope, elem, attr) {
					scope.$on('$routeChangeSuccess', function (a, toPath) {
						if (!toPath.$$route) return;
						var path = toPath.$$route.originalPath;
						var $elem = $(elem);
						$elem.find('.active').removeClass('active');
						$elem.find('a[href="'+path+'"]').parent('li').addClass('active');
					});
				}
			}
		}
	]);
