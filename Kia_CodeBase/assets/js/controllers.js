'use strict';

/* Controllers */

var dealmeControllers = angular.module('dealmeControllers', ['ui.bootstrap']);
//main app ctrl - handles all functions for the navigation area and any other base interactions as well 
dealmeControllers.controller('MainAppCtrl', ['$scope', '$rootScope', '$sce', '$http', '$location',
    function($scope, $rootScope, $sce, $http, $location){
        moment.locale('en', {
            calendar : {
                lastDay : '[Yesterday at] LT',
                sameDay : '[Today at] LT',
                nextDay : '[Tomorrow at] LT',
                lastWeek : '[last] dddd [at] LT',
                nextWeek : 'dddd [at] LT',
                sameElse : 'LL'
            },
            ordinal : function (number, token) {
                var b = number % 10;
                var output = (~~ (number % 100 / 10) === 1) ? '<span>th</span>' :
                    (b === 1) ? '<span>st</span>' :
                    (b === 2) ? '<span>nd</span>' :
                    (b === 3) ? '<span>rd</span>' : '<span>th</span>';
                return number + output;
            }
        });
        $scope.toTrustedHTML = function( html ){
            return $sce.trustAsHtml( html );
        };
        $scope.isActive = function(path) {
            if(path == "/" && $location.path() != "/"){
                return false;
            }
            else if ($location.path().substr(0, path.length) == path) {
                return true;
            } else {
                return false;
            }
        }
        $scope.logout = function() {
            $http.post('assets/backend/user.json', {}).success(function() {
                $rootScope.authenticated = false;
                $rootScope.loggedInUser = null;
                $location.path("/");
            }).error(function(data) {
                $rootScope.authenticated = false;
                $rootScope.loggedInUser = null;
            });
        }
        $scope.selectCategory = function(id){
            var cat_id = id,
                numCatSelected = 0;
            $.each($scope.categories, function(idx, val){
                if(val.selected == 1){
                    numCatSelected++;
                }
            })
            $.each($scope.categories, function(idx, val){
                if(val.id == cat_id){
                    if(val.selected != 1){
                        $scope.categories[idx].selected = 1;
                        numCatSelected++;
                    }else{
                        $scope.categories[idx].selected = 0;
                        if(numCatSelected > 0){
                            numCatSelected--;
                        }
                    }
                }else if(cat_id == '' && val.id != cat_id) {
                    $scope.categories[idx].selected = 0;
                    if(numCatSelected > 0){
                        numCatSelected--;
                    }
                }
            });
            if(cat_id != '' && numCatSelected > 0){
                $scope.categories[0].selected = 0;
            }else if(numCatSelected == 0){
                $scope.categories[0].selected = 1;
            }
            // $http.put('backend/update.php', {'checkpoint': true, 'id': chkpt_id, 'options': {'selected': selected}})
        };
        $scope.displayMap = function(){
            var mapOptions = {
                zoom: 13,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
            }; // end map options
            var mapStyles = [
                {
                    stylers: [
                        { hue: "#00ffe6" },
                        { saturation: -20 }
                    ]
                },{
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [
                        { lightness: 100 },
                        { visibility: "simplified" }
                    ]
                },{
                    featureType: "road",
                    elementType: "labels",
                    stylers: [
                        { visibility: "off" }
                    ]
                }
            ];
            var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions)
            map.setOptions({styles:mapStyles});

            if (navigator.geolocation) {
                var initialLocation;
                navigator.geolocation.getCurrentPosition(function (position) {
                    initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                    map.setCenter(initialLocation);
                    var image = 'http://lh6.ggpht.com/tWNo5Up_uB17_M-y92SYsp5aA2VTGKZpnnP67WYntAUm-HbnRUmpJ9R0Mz1oxoI=h18';
                    var marker = new google.maps.Marker({
                        position: initialLocation,
                        map: map,
                        icon: image
                    });
                    var infowindow = new google.maps.InfoWindow({
                        map: map,
                        position: initialLocation,
                        content: 'Current Location'
                    });
                    infowindow.open(map, marker);
                });
                
            }else{ //user chose to not share location
                var position = new google.maps.LatLng(53.5501400, -113.4687100);
                map.setCenter(position);
                var marker = new google.maps.Marker({
                    position: position,
                    map: map
                });
                var infowindow = new google.maps.InfoWindow({
                    map: map,
                    position: position,
                    content: 'Current Location'
                });
                infowindow.open(map, marker);
            }
        }
        $scope.categoryFilter = '';
        $rootScope.authenticated = false;
        $scope.dealers = [
            {
                title: "Computers Galore",
                subtitle: "Computer Store",
                dealer_id: 1,
                category_id: 1,
                profile_img: "computers/1.svg",
                details: "We sell all sorts of good computers and stuff.",
                locations: [
                    "Edmonton, AB",
                    "Saskatoon, SK",
                    "Calgary, AB"
                ],
                sm: {
                    twitter: 'https://twitter.com/',
                    facebook: 'https://www.facebook.com/',
                    googleplus: '',
                    instagram: ''
                }
            },
            {
                title: "Everything and More",
                subtitle: "General Store",
                dealer_id: 2,
                category_id: 2,
                profile_img: "general/1.jpeg",
                details: "We sell everything... and more!",
                locations: [
                    "Edmonton, AB",
                    "Regina, SK"
                ],
                sm: {
                    twitter: 'https://twitter.com/',
                    facebook: 'https://www.facebook.com/',
                    googleplus: '',
                    instagram: ''
                }
            },
            {
                title: "Toys 4Ever",
                subtitle: "Fun Store",
                dealer_id: 3,
                category_id: 3,
                profile_img: "fun/1.png",
                details: "Toys, toys and more toys!",
                locations: [
                    "Edmonton, AB",
                    "Saskatoon, SK",
                    "Calgary, AB",
                    "Regina, SK",
                    "Fort McMurray, AB"
                ],
                sm: {
                    twitter: 'https://twitter.com/',
                    facebook: 'https://www.facebook.com/',
                    googleplus: '',
                    instagram: ''
                }
            },
            {
                title: "Convenience is Us",
                subtitle: "General Store",
                dealer_id: 4,
                category_id: 2,
                profile_img: "general/2.jpg",
                details: "We sell stuff for cheap.",
                locations: [
                    "Edmonton, AB"
                ],
                sm: {
                    twitter: 'https://twitter.com/',
                    facebook: 'https://www.facebook.com/',
                    googleplus: '',
                    instagram: ''
                }
            },
            {
                title: "3.14159",
                subtitle: "Computer Store",
                dealer_id: 5,
                category_id: 1,
                profile_img: "computers/2.png",
                details: "E = MC SQUARED",
                locations: [
                    "Edmonton, AB",
                    "Calgary, AB",
                    "Vancouver, BC"
                ],
                sm: {
                    twitter: 'https://twitter.com/',
                    facebook: 'https://www.facebook.com/',
                    googleplus: '',
                    instagram: ''
                }
            },
            {
                title: "Goof Troop",
                subtitle: "Fun Store",
                dealer_id: 6,
                category_id: 3,
                profile_img: "fun/2.gif",
                details: "Let's get goofy!",
                locations: [
                    "Calgary, AB",
                    "Vancouver, BC"
                ],
                sm: {
                    twitter: 'https://twitter.com/',
                    facebook: 'https://www.facebook.com/',
                    googleplus: '',
                    instagram: ''
                }
            }
        ];
        $scope.deals = [
            {
                title: "50% OFF!",
                id: 1,
                dealer_id: 1,
                category_id: 1,
                dealer: "Computers Galore",
                details: "50% off everything in the store. Everything MUST GO!"
            },
            {
                title: "BOGO",
                id: 2,
                dealer_id: 3,
                category_id: 3,
                dealer: "Toys 4Ever",
                details: "BOGO on almost anything in the store. Only at select locations."
            },
            {
                title: "Blowout Sale",
                id: 3,
                dealer_id: 2,
                category_id: 2,
                dealer: "Everything And More",
                details: "Making space for new merchandise, everything at least half price. Come quick before it's all gone."
            },
            {
                title: "Funky Friday",
                id: 4,
                dealer_id: 6,
                category_id: 3,
                dealer: "Goof Troop",
                details: "Everything funky half off today. Disco ball? Half off. Clown shoes? Half off. What IS funky? Come down and see!"
            },
            {
                title: "Train Sale",
                id: 5,
                dealer_id: 3,
                category_id: 3,
                dealer: "Toys 4Ever",
                details: "All trains, all day on sale now. Get up to 30% off."
            },
            {
                title: "Ultimate Pi Day Sale",
                id: 6,
                dealer_id: 5,
                category_id: 1,
                dealer: "3.14159",
                details: "Everything on sale today for $3.14159, get it while it's hot!"
            },
            {
                title: "All Nerds Day",
                id: 7,
                dealer_id: 5,
                category_id: 1,
                dealer: "3.14159",
                details: "Like All Saint's Day but better because we give you deals on computers. Brand new laptops only $599."
            },
            {
                title: "Spring into Sales",
                id: 8,
                dealer_id: 6,
                category_id: 3,
                dealer: "Goof Troop",
                details: "First sale of the season and our prices have sprung a leak. Every hour our prices will go down and we're not telling when the leak will stop. Once we get the leak fixed they'll quickly go back up. Don't wait too long!"
            }
        ];
        $scope.categories = [
            {
                id: '',
                name: "All",
                selected: 1
            },
            {
                id: 1,
                name: "Computers",
                selected: 0
            },
            {
                id: 2,
                name: "General",
                selected: 0
            },
            {
                id: 3,
                name: "Fun",
                selected: 0
            },
        ]
    }]);
//controller for the home page
dealmeControllers.controller('HomeCtrl', ['$scope', 
    function($scope) {

    }]);
//controller for the contact page
dealmeControllers.controller('ContactCtrl', ['$scope',
    function($scope) {
    }]);
//controller for the dashboard
dealmeControllers.controller('DashboardCtrl', ['$scope',
    function ($scope) {
    }]);
//controller for the login page
dealmeControllers.controller('LoginCtrl', ['$scope', '$rootScope', '$http', '$location',
    function ($scope, $rootScope, $http, $location) {
        var authenticate = function(credentials, callback) {
            // var headers = credentials ? {authorization : "Basic " + btoa(credentials.username + ":" + credentials.password)} : {};

            $http.get('assets/backend/user.json').success(function(data) { //, headers: headers
                if (data.name == credentials.username && data.pwd == credentials.password) {
                    $rootScope.authenticated = true;
                    $rootScope.loggedInUser = {'name':data.name, 'pwd':data.pwd};
                } else {
                    $rootScope.authenticated = false;
                    $rootScope.loggedInUser = null;
                }
                callback && callback();
            }).error(function() {
                $rootScope.authenticated = false;
                $rootScope.loggedInUser = null;
                callback && callback();
            });
        }

        authenticate();

        $scope.credentials = {};

        $scope.login = function() {
            authenticate($scope.credentials, function() {
                if ($rootScope.authenticated) {
                    $location.path("/dashboard");
                    $scope.error = false;
                } else {
                    $location.path("/login");
                    $scope.error = true;
                }
            });
        };
    }]);
//controller for the deals page
dealmeControllers.controller('DealsCtrl', ['$scope',
    function ($scope) {
    }]);
//controller for the dealers page
dealmeControllers.controller('DealersCtrl', ['$scope',
    function ($scope) {
        $scope.listview = true;
        $scope.mapview = false;
        $scope.setMap = function(){
            $scope.listview = false;
            $scope.mapview = true;
            setTimeout($scope.displayMap, 3000);

        }
        $scope.setList = function(){
            $scope.listview = true;
            $scope.mapview = false;
        }
    }]);

dealmeControllers.controller('DealerCtrl', ['$scope', '$routeParams',
    function ($scope, $routeParams) {
        $scope.dealer_id = $routeParams.dealer_id;
        $scope.dealer = $scope.dealers[$scope.dealer_id - 1];
    }]);

//controller for opening the add project modal and returning data from the modal
dealmeControllers.controller('AccountSettingsCtrl', ['$scope', '$modal',
    function ($scope, $modal) {
        $scope.open = function (size) {

            var modalInstance = $modal.open({
                templateUrl: 'partials/account.html',
                controller: 'AccountSettingsInstanceCtrl',
                size: size,
            });
        };
    }]);

//controller for actions inside the add project modal such as saving to the server
dealmeControllers.controller('AccountSettingsInstanceCtrl', function ($scope, $modalInstance, $http) {
    $scope.errors = [];

    $scope.ok = function () {
        $modalInstance.close();
    };

    $scope.cancel = function () {
        $modalInstance.dismiss('cancel');
    };
    $scope.saveSettings = function (){
        $scope.errors.splice(0, $scope.errors.length); // remove all error messages
        $scope.ok();
    }
});