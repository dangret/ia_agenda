"use strict";
angular.module('agenda')
	.controller('ContactCtrl', ['config', '$rootScope', '$scope', '$compile', 'DTOptionsBuilder', 'DTColumnBuilder', 'ErrorResponseService', 'NotificationService', '$modal', 'Contact', '$filter',
		function (config, $rootScope, $scope, $compile, DTOptionsBuilder, DTColumnBuilder, ErrorResponseService, NotificationService, $modal, Contact, $filter) {
			$scope.row = {};
			$scope.tabSelected = 'Pendiente';

			$scope.modelDelete = function (promise) {
				promise.then(function (response) {
					NotificationService.show('El empleado ha sido eliminado satisfactoriamente', 'success');
					$scope.datatable.instance.reloadData();
				}, ErrorResponseService);
			};


			var reloadExperience = function () {
				// Notify when it's successfull
				NotificationService.show('Los datos se han guardado correctamente', 'success');
				// Refresh table
				$scope.datatable.instance.reloadData();
			}

			$scope.contactInfo = function (type, contact) {
				var modal = $modal.open({
					templateUrl: 'EmployeeData',
					controller: 'ContactDataCtrl',
					size: 'lg',
					backdrop: 'backdrop',
					class: 'md-effect-1',
					resolve: {
						contact: function () {
							return contact;
						},
						type: function () {
							return type;
						}
					}
				});

				modal.result.then(function (response) {
					var contact = response;
					// Call Contact Service which is a $resource shorthand for RESTfull api
					if (contact.id) {
						var _contact = Contact.get({
							id: contact.id
						}, function () {
							_contact = _.merge(_contact, contact);
							_contact.$update(reloadExperience);
						});
					} else {
						Contact.save(contact, reloadExperience);
					}
				});
			};

			$scope.remove = function (contact) {
				$rootScope.confirmDialog('¿Desea eliminar a ' + contact.name + '?').result.then(function () {
					Contact.delete({
						id: contact.id
					}, function () {
						NotificationService.show('Los datos se han guardado correctamente', 'success');
						$scope.datatable.instance.reloadData();
					});
				})
			}

			// Editar
			var renderEdit = function (data, type, row, meta) {
				$scope.row[row.id] = row;
				var edit = '<a href= "javascript:void(0);" class="btn btn-warning" ng-click="contactInfo(\'edit\', row[' + row.id + ']);"><i class="fa fa-edit"></i>';
				return '<div class="center">' + edit + '</div>';
			}

			// Visualizar
			var renderView = function (data, type, row, meta) {
				$scope.row[row.id] = row;
				var edit = '<a href= "javascript:void(0);" class="btn btn-info" ng-click="contactInfo(\'view\', row[' + row.id + ']);"><i class="fa fa-eye"></i>';
				return '<div class="center">' + edit + '</div>';
			}

			// Eliminar
			var renderDelete = function (data, type, row, meta) {
				$scope.row[row.id] = row;
				var trash = '<a href= "javascript:void(0);" class="btn btn-danger" ng-click="remove(row[' + row.id + ']);"><i class="fa fa-trash"></i>';
				return '<div class="center">' + trash + '</div>';
			}

			$scope.datatable = {
				instance: {},
				options: DTOptionsBuilder
					.fromSource(config.apiUrl + 'contacts')
					.withOption('bDeferRender', true)
					.withOption('order', [
						[0, "asc"]
					])
					.withDOM('<"clearfix">tip')
					.withOption('createdRow', function (row, data, dataIndex) {
						$compile(angular.element(row).contents())($scope);
					}),
				columns: [
					DTColumnBuilder.newColumn("id").withTitle("Contacto").withClass('name-col')
					.renderWith(function (data, type, row) {
						return "<img ng-src='" + config.baseUrl + row.photo + "' alt='' style='-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;background-clip: padding-box;float: left;height: 35px;margin-right: 5px;width: 35px;''><a href='#' class='user-link'>" + row.name + "</a>";
					}),
					DTColumnBuilder.newColumn("phone").withClass("text-center nowrap data-col").withTitle("TELEFONO")
					.renderWith(function (data) {
						var newNumber = $filter('tel')(data);
						return newNumber;
					}),
					DTColumnBuilder.newColumn(null).withClass("text-center nowrap action-col").withTitle("VISUALIZAR").renderWith(renderView),
					DTColumnBuilder.newColumn(null).withClass("text-center nowrap action-col").withTitle("EDITAR").renderWith(renderEdit),
					DTColumnBuilder.newColumn(null).withClass("text-center nowrap action-col").withTitle("ELIMINAR").renderWith(renderDelete),
				]
			}
		}
	]);
