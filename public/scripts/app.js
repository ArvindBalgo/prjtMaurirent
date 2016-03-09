var app = angular.module('app', ['ngMaterial', 'ui.bootstrap', 'ui.select'], function($interpolateProvider){
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
}).constant("CSRF_TOKEN", '{{ csrf_token() }}');

/*app.config(function($interpolateProvider){
   $interpolateProvider.startSymbol('<%');
   $interpolateProvider.endSymbol('%>');
});*/
app.filter('propsFilter', function() {
    return function(items, props) {
        var out = [];

        if (angular.isArray(items)) {
            items.forEach(function(item) {
                var itemMatches = false;

                var keys = Object.keys(props);
                for (var i = 0; i < keys.length; i++) {
                    var prop = keys[i];
                    var text = props[prop].toLowerCase();
                    if (item[prop].toString().toLowerCase().indexOf(text) !== -1) {
                        itemMatches = true;
                        break;
                    }
                }

                if (itemMatches) {
                    out.push(item);
                }
            });
        } else {
            // Let the output be the input untouched
            out = items;
        }

        return out;
    };
});
app.controller('appController', function($scope, $http){
    $scope.isDisplayed = true;
    console.log($scope.test);
    $scope.login = function(){
        $("#loginModal").modal();
        if(!$scope.$$phase) $scope.$apply();
    };

    $scope.register = function(){
      $('#registerModal').modal();
    };
    $scope.fnLogout = function() {
        $http({
            url:'auth/logout',
            method:'POST'
        }).then(function(response){
                console.log('RESPONSE:', response.data);
            }), function(error){
            console.log('ERROR ',error.data);
        };
    };

    $scope.isDisplayedCarousel = function(){
        if($scope.isDisplayed) {
            $scope.isDisplayed = false;
        }
        else{
            $scope.isDisplayed = true;
        }

    };

    $scope.fnToggle = function() {
      console.log('TOGGLING');
    };
});

app.controller('homeController', function($scope, $http, CSRF_TOKEN){
    $scope.home = "HOME TEST";
    $scope.email="";
    $scope.password="";
    $scope.loginBtn = function(){
        $scope.remember=false;
        $http({
             url:'auth/login',
             method:'POST',
             data:{'email':$scope.email, 'password':$scope.password, 'remember':$scope.remember, 'csrf_token': CSRF_TOKEN}
             }).then(function(response){
             console.log('RESPONSE:', response.data);
                $scope.fnGetUser();
             }), function(error){
             console.log('ERROR ',error.data);
         };
    };
    $scope.checkUser = function(){
        $http({
            url:'checkuser',
            method:'GET'
        }).then(function(response){
                console.log('RESPONSE USER:', response.data);
                if(response.data && window.location.pathname == '/'){
                    window.location = "http://localhost:8000/home";
                }
                console.log(window.location.pathname);
                console.log(window.location.href);
            }), function(error){
            console.log('ERROR ',error.data);
        };
    };

    $scope.fnRegister = function(){
      console.log($scope.name, " -- ", $scope.regEmail, ' -- ', $scope.pass, ' -- ', $scope.pass2);
        $http({
            url:'auth/register',
            method:'POST',
            data:{'name':$scope.name, 'email':$scope.regEmail, 'password':$scope.pass, 'password_confirmation':$scope.pass2}
        }).then(function(response){
                console.log('RESPONSE: ', response.data);
            }), function(error){
            console.log('Error : ', error.data);
        }
    };

    $scope.fnGetUser = function() {
        $http({
            url:'/test',
            method:'POST'
        }).then(function(response){
                console.log('RESPONSE:', response.data);
            }), function(error){
            console.log('ERROR ',error.data);
        };
    };


    $scope.arrLatest = [
                        {'id':'1','active':'active', 'title' : "Vacations", 'caption' : "Need a place!!!", "description" : "Check out our catalogues of apartments, bungalows and hotels", "imgsrc" : "images/home/apartment1.jpg", "pricesrc" : "images/home/pricing.png"},
                        {'id':'2','active':'','title' : "Hotel Veranda", 'caption' : "Just Added!!!", "description" : "Awesome place to be...", "imgsrc" : "images/home/apartment2.jpg", "pricesrc" : "images/home/pricing.png"},
                        {'id':'3','active':'','title' : "Valentines Specials", 'caption' : "Available for the month of February", "description" : "swimming pool, attractive price for long term stay...", "imgsrc" : "images/home/apartment3.jpg", "pricesrc" : "images/home/pricing.png"}
                    ];
    $scope.myInterval = 3000;
    $scope.slides = [
        {
            image: 'http://lorempixel.com/400/200/'
        },
        {
            image: 'http://lorempixel.com/400/200/food'
        },
        {
            image: 'http://lorempixel.com/400/200/sports'
        },
        {
            image: 'http://lorempixel.com/400/200/people'
        }
    ];
   // $scope.checkUser();
});

app.controller('contentController', function($scope, $http){
    $scope.isDeals          = false;
    $scope.isAccount        = false;
    $scope.isBookings       = false;
    $scope.isPrevPurchases  = false;
    $scope.isRewardStats    = false;
    $scope.isNotifs         = false;
    $scope.isReviews        = false;

    $scope.side = "sideContent";
    $scope.multiple = {};
    $scope.multiple.region = [];
    $scope.multiple.type = [];
    $scope.arrRegions = ['North','East','South','WEST','Central'];
    $scope.arrTypes = ['Apartment','Hotels','Bungalow','Villa','Halls'];
    $scope.mainContent = "main content";
    $scope.isCollapsed = false;
    $scope.oneAtATime = true;
    $scope.tabs = [
        {active:true, title : 'Deals', interface:'isDeals'},
        {active:false, title : 'Configure Acc', interface:'isAccount'},
        {active:false, title : 'Bookings', interface:'isBookings'},
        {active:false,  title : 'Previous Purchases', interface:'isPrevPurchases'},
        {active:false, title : 'Rewards Status', interface:'isRewardStats'},
        {active:false, title : 'Notifications', interface:'isNotifs'},
        {active:false, title : 'Reviews', interface:'isReviews'}
    ];

    $scope.groups = [
        {
            title: 'Dynamic Group Header - 1',
            content: 'Dynamic Group Body - 1'
        },
        {
            title: 'Dynamic Group Header - 2',
            content: 'Dynamic Group Body - 2'
        }
    ];

    $scope.items = ['Item 1', 'Item 2', 'Item 3'];

    $scope.addItem = function() {
        var newItemNo = $scope.items.length + 1;
        $scope.items.push('Item ' + newItemNo);
    };

    $scope.status = {
        isFirstOpen: true,
        isFirstDisabled: false
    };

    //$scope.arrTypes = ['Hotels', 'Bungalows', 'Apartment', 'Student Residency'];


    $scope.model = {
        name: 'Tabs'
    };
    $scope.tiles = [
        {row:2, col:2, background:"red",    title:'Sea Villa', img:'/images/home/a4.jpg', address: "Flic-en-flac"},
        {row:2, col:2, background:"blue",   title:'Lux Comfort', img:'/images/home/a6.jpg', address: "Flic-en-flac"},
        {row:2, col:2, background:"yellow", title:'Cozy Apart', img:'/images/home/apartment1.jpg', address: "Flic-en-flac"},
        {row:2, col:2, background:"green",  title:'Hotel Prestige', img:'/images/home/a7.jpg', address: "Flic-en-flac"},
        {row:2, col:2, background:"green",  title:'Hotel Prestige', img:'/images/home/a8.jpg', address: "Flic-en-flac"},
        {row:2, col:2, background:"green",  title:'Hotel Prestige', img:'/images/home/a9.jpg', address: "Flic-en-flac"}
    ];

    $scope.displayPage = function(){
        angular.forEach($scope.tabs, function(value,  key){
            switch(value.interface){
                case 'isDeals' :
                    $scope.isDeals = value.active;
                    break;
                case 'isAccount' :
                    $scope.isAccount = value.active;
                    break;
                case 'isBookings' :
                    $scope.isBookings = value.active;
                    break;
                case 'isPrevPurchases' :
                    $scope.isPrevPurchases = value.active;
                    break;
                case 'isRewardStats' :
                    $scope.isRewardStats = value.active;
                    break;
                case 'isNotifs' :
                    $scope.isNotifs = value.active;
                    break;
                case 'isReviews' :
                    $scope.isReviews = value.active;
                    break;
                default :
                    break;
            }
        })
    };
    $scope.displayPage();
});

