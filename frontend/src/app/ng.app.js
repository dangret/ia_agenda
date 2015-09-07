"user strict";
angular.module('agenda', ['ngRoute', 'ngResource', 'ngAnimate', 'ui.bootstrap', 'datatables', 'ui.select', 'ngSanitize', 'ngMessages', 'remoteValidation', 'ngDropzone', 'remuneracion.filters', 'angularMoment', 'easypiechart', 'ui.utils.masks', 'datePicker', 'flow', 'angular.morris-chart'])
    .config(['$routeProvider', '$locationProvider', 'uiSelectConfig',
        function ($routeProvider, $locationProvider, uiSelectConfig) {
            uiSelectConfig.theme = 'bootstrap';
            $locationProvider.html5Mode({
                enabled: true,
                requireBase: false
            });

            $routeProvider
                .when('/', {
                    redirectTo: 'dashboard',
                })
                .when('/dashboard', {
                    templateUrl: 'app/main/views/dashboard/dashboard.html',
                    controller: 'DashboardCtrl',
                }).when('/contactos', {
                    templateUrl: 'app/main/views/contactos/contacts.html',
                    controller: 'ContactCtrl',
                }).otherwise({
                    redirectTo: '/dashboard'
                });
        }
    ])
    .run(['$rootScope', '$modal', 'DTDefaultOptions', 'amMoment', 'SesionService',
        function ($rootScope, $modal, DTDefaultOptions, amMoment, SesionService) {

            $rootScope.confirmDialog = function (msg) {
                return $modal.open({
                    templateUrl: 'modalConfirm',
                    controller: 'modalConfirmCtrl',
                    size: 'lg',
                    backdrop: 'static',
                    resolve: {
                        msg: function () {
                            return msg;
                        }
                    }
                });
            }

            amMoment.changeLocale('es', {
                monthsFull: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["ENE", "FEB", "MAR", "ABR", "MAY", "JUN", "JUL", "AGO", "SEP", "OCT", "NOV", "DIC"],
                weekdaysFull: ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"],
                weekdaysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
                today: "Hoy",
                clear: "Borrar",
                close: "Cerrar",
                firstDay: 1,
                format: "dd/mmm/yyyy",
                formatSubmit: "yyyy/mmm/dd",
            })
        }
    ]);



angular.module('agenda')
    .constant('config', {
        appName: 'agenda',
        appVersion: 1.0,
        apiUrl: 'http://agenda/api/v1/',
        baseUrl: 'http://agenda/'
    });

angular.module('agenda').filter('tel', function () {
    return function (tel) {
        if (!tel) {
            return '';
        }
        var value = tel.toString().trim().replace(/^\+/, '');

        if (value.match(/[^0-9]/)) {
            return tel;
        }

        var country, city, number;

        switch (value.length) {
            case 10: // +1PPP####### -> C (PPP) ###-####
                country = 1;
                city = value.slice(0, 3);
                number = value.slice(3);
                break;

            case 11: // +CPPP####### -> CCC (PP) ###-####
                country = value[0];
                city = value.slice(1, 4);
                number = value.slice(4);
                break;

            case 12: // +CCCPP####### -> CCC (PP) ###-####
                country = value.slice(0, 3);
                city = value.slice(3, 5);
                number = value.slice(5);
                break;

            default:
                return tel;
        }

        if (country == 1) {
            country = "";
        }

        number = number.slice(0, 3) + '-' + number.slice(3);

        return (country + " (" + city + ") " + number).trim();
    };
});
