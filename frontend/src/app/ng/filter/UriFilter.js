"use strict";
angular.module('remuneracion.filters',[])
    .filter('uri', function ($location) {
        return {
            segment: function (segment) {
                var data = $location.path().split("/");
                if (data[segment]) {
                    return data[segment];
                }
                return false;
            },
            total_segments: function () {
                var data = $location.path().split("/");
                var i = 0;
                angular.forEach(data, function (value) {
                    if (value.length) {
                        i++;
                    }
                });
                return i;
            }
        };
    });
