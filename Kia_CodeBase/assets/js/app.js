'use strict';

/* App Module */
var dealmeApp = angular.module('dealmeApp', [
    'ngRoute',
    'dealmeAnimations',
    'dealmeControllers',
    'dealmeFilters',
    'dealmeDirectives',
    'dealmeServices',
    'angularMoment'
]);
// dealmeApp.constant('angularMomentConfig', {
//     preprocess: 'unix'
// });

dealmeApp.config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
        $routeProvider.
            when('/', {
                templateUrl: 'partials/home.html',
                controller: 'HomeCtrl'
            }).
            when('/contact', {
                templateUrl: 'partials/contact.html',
                controller: 'ContactCtrl'
            }).
            when('/dashboard', {
                templateUrl: 'partials/dashboard.html',
                controller: 'DashboardCtrl'
            }).
            when('/deals', {
                templateUrl: 'partials/deals.html',
                controller: 'DealsCtrl'
            }).
            when('/dealers', {
                templateUrl: 'partials/dealers.html',
                controller: 'DealersCtrl'
            }).
            when('/dealers/:dealer_id', {
                templateUrl: 'partials/dealer.html',
                controller: 'DealerCtrl'
            }).
            when('/login', {
                templateUrl: 'partials/login.html',
                controller: 'LoginCtrl'
            }).
            otherwise({
                redirectTo: '/'
            });

    }])
.run(function($rootScope, $location) {
        $rootScope.$on( "$routeChangeStart", function(event, next, current) {
            if ($rootScope.loggedInUser == null) {
                // no logged user, redirect to /login
                if (next.templateUrl != undefined && next.templateUrl != "partials/login.html" && next.templateUrl != "partials/home.html" && next.templateUrl != "partials/contact.html") {
                    $location.path("/login");
                }
            }
        });
    });
