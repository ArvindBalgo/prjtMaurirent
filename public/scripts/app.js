var app = angular.module('app', ['ngMaterial', 'ui.bootstrap'], function($interpolateProvider){
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

/*app.config(function($interpolateProvider){
   $interpolateProvider.startSymbol('<%');
   $interpolateProvider.endSymbol('%>');
});*/

app.controller('appController', function($scope, $http){
    $scope.test = "TESTING";
    console.log($scope.test);
});

app.controller('homeController', function($scope, $http){
    $scope.home = "HOME TEST";
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
    console.log($scope.home);
});

app.controller('contentController', function($scope, $http){
    $scope.side = "sideContent";
    $scope.mainContent = "main content";
    $scope.arrRegions = [
                            {value:'North',display:'North'},
                            {value:'East',display:'East'},
                            {value:'South',display:'South'},
                            {value:'West',display:'West'}
                        ];

    $scope.arrTypes = ['Hotels', 'Bungalows', 'Apartment', 'Student Residency'];
    $scope.messages = [{
        what: 'Brunch this weekend?',
        who: 'Min Li Chan',
        when: '3:08PM',
        notes: " I'll be in your neighborhood doing errands"
    }, {
        what: 'Brunch this weekend?',
        who: 'Min Li Chan',
        when: '3:08PM',
        notes: " I'll be in your neighborhood doing errands"
    }, {
        what: 'Brunch this weekend?',
        who: 'Min Li Chan',
        when: '3:08PM',
        notes: " I'll be in your neighborhood doing errands"
    }, {
        what: 'Brunch this weekend?',
        who: 'Min Li Chan',
        when: '3:08PM',
        notes: " I'll be in your neighborhood doing errands"
    }, {
        what: 'Brunch this weekend?',
        who: 'Min Li Chan',
        when: '3:08PM',
        notes: " I'll be in your neighborhood doing errands"
    }];

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
});

app.config(function($mdIconProvider){
    $mdIconProvider.iconSet("avatar", 'icons/avatar-icons.svg', 128);
});