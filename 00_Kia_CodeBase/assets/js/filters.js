'use strict';

/* Filters */


var dealmeFilters = angular.module('dealmeFilters', []);

// dealmeFilters.filter('dateToISO', function() {
//   return function(input) {
//   	if(input){
//   		return new Date(input).toISOString();
//   	}
//   };
// });
dealmeFilters.filter('categoryFilter', function() {
	return function( items, categories) {
		var filtered = [];

		angular.forEach(items, function(item) {
			angular.forEach(categories, function(category){
				if(category.selected == 1 && (item.category_id == category.id || category.id == '')){
					var addItem = true;
					angular.forEach(filtered, function(filteredItem){
						if(filteredItem == item){
							addItem = false;
						}
					})
					if(addItem){
						filtered.push(item);
					}
				}
			});
	    });
	    return filtered;
	};
});
dealmeFilters.filter('searchQueryCategory', function(){
	return function(items, query){
		var filtered = [];
		angular.forEach(items, function(item) {
			angular.forEach($scope.categories, function(category){
				if(category.selected == 1 && (item.category_id == category.id || category.id == '')){
					var addItem = true;
					angular.forEach(filtered, function(filteredItem){
						if(filteredItem == item){
							addItem = false;
						}
					})
					if(addItem){
						filtered.push(item);
					}
				}
			});
	    });
	    return filtered;
	}
})