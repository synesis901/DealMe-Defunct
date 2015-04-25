'use strict';

/* Services */

var dealmeServices = angular.module('dealmeServices', ['ngResource']);

/* Service for making get requests, etc easier */
//sample server
// dealmeServices.factory('Project', ['$resource',
//   function($resource){
//    	return $resource('backend/read.php?project_id=:project_id', {}, {
//       query: {method:'GET', params:{project_id:'projects'}, isArray:true}
//     });
//   }]);
