var kostidApp = angular.module('kostidApp', [
    'ui.router',
    'ui.bootstrap',
    'oc.lazyLoad'
], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

kostidApp.config(['$ocLazyLoadProvider', function($ocLazyLoadProvider) {
    $ocLazyLoadProvider.config({
        // global configs go here
    });
}]);

kostidApp.factory('settings', ['$rootScope', function($rootScope) {
    // supported languages
    var settings = {
        layout: {
            pageAutoScrollOnLoad: 1000 // auto scroll to top on page load
        }
    };

    $rootScope.settings = settings;

    return settings;
}]);

/* Disable hash on URL*/
kostidApp.config(["$locationProvider", function($locationProvider) {
    $locationProvider.html5Mode(true);
}]);

/* Setup Routing For All Pages */
kostidApp.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    // Redirect any unmatched url
    $urlRouterProvider.otherwise("/404.html");

    $stateProvider
        // 404 Not Found
        .state('404', {
            url: "/404.html",
            templateUrl: TEMPLATE_PATH + "/404.html",            
            data: {pageTitle: 'Halaman Tidak Ditemukan'}
        })
        // Home
        .state('home', {
            url: "/",
            templateUrl: TEMPLATE_PATH + "/home.html",
            controller: "HomeController",
            data: {pageTitle: 'Info Kost di Kotamu'},
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'kostidApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            ASSET_PATH + '/frontend/js/controllers/HomeController.js'
                        ] 
                    });
                }]
            }
        })
        // City
        .state('city', {
            url: "/malang",
            templateUrl: TEMPLATE_PATH + "/city.html",      
            controller: "CityController",
            data: {pageTitle: 'City'},
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'kostidApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            ASSET_PATH + '/frontend/js/controllers/CityController.js'
                        ] 
                    });
                }]
            }
        })
        // City
        .state('lowokwaru', {
            url: "/malang/lowokwaru",
            templateUrl: TEMPLATE_PATH + "/city.html",      
            controller: "CityController",
            data: {pageTitle: 'City'},
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'kostidApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            ASSET_PATH + '/frontend/js/controllers/CityController.js'
                        ] 
                    });
                }]
            }
        })
        // Detail
        .state('detail', {
            url: "/detail/:id",
            templateUrl: TEMPLATE_PATH + "/detail.html",      
            controller: "DetailController",
            data: {pageTitle: 'Detail'},
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'kostidApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            ASSET_PATH + '/frontend/js/controllers/DetailController.js'
                        ] 
                    });
                }]
            }
        })
        // Cart
        .state('cart', {
            url: "/cart",
            templateUrl: TEMPLATE_PATH + "/cart/cart.html",      
            controller: "CartController",
            data: {pageTitle: 'Informasi Transaksi'},
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'kostidApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            ASSET_PATH + '/frontend/js/controllers/CartController.js'
                        ] 
                    });
                }]
            }
        })
        // Checkout
        .state('Checkout', {
            url: "/checkout",
            templateUrl: TEMPLATE_PATH + "/cart/checkout.html",      
            controller: "CheckoutController",
            data: {pageTitle: 'Checkout'},
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'kostidApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            ASSET_PATH + '/frontend/js/controllers/CheckoutController.js'
                        ] 
                    });
                }]
            }
        })
        // Confirm
        .state('confirm', {
            url: "/confirm",
            templateUrl: TEMPLATE_PATH + "/cart/confirm.html",      
            controller: "ConfirmController",
            data: {pageTitle: 'Konfirmasi'},
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'kostidApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            ASSET_PATH + '/frontend/js/controllers/ConfirmController.js'
                        ] 
                    });
                }]
            }
        })
        // Invoice
        .state('invoice', {
            url: "/invoice/:id",
            controller: "InvoiceController",
            data: {pageTitle: 'Invoice'},
            resolve: {
                deps: ['$ocLazyLoad', function($ocLazyLoad) {
                    return $ocLazyLoad.load({
                        name: 'kostidApp',
                        insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                        files: [
                            ASSET_PATH + '/frontend/js/controllers/InvoiceController.js'
                        ] 
                    });
                }]
            }
        })
}]);

kostidApp.run(['$rootScope', 'settings', '$state', '$stateParams', 
    function($rootScope, settings, $state, $stateParams) {
        
        $rootScope.$state = $state;

        //WOW style
        new WOW().init();
        $rootScope.$on('$routeChangeStart', function (next, current) {
            //when the view changes sync wow
            new WOW().sync();
        });
    
}]);

kostidApp.filter('comma2decimal', [
    function() { // should be altered to suit your needs
        return function(input) {
        var ret=(input)?input.toString().trim().replace(",","."):null;
            //return parseFloat(ret);
            return ret;
        };
    }]);