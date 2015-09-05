(function() {
    'use strict';

    angular.module('kostidApp', [
        'ngRoute',
        'ngSanitize',
        'ngAnimate',
        'flash',
        'HomeController',
        'CityController',
        'DetailController',
        'CartController'
    ], function($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    });

}());

function getUrlParameter(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function getAllUrlParameter() {
    var urlParams,
            match,
            pl = /\+/g, // Regex for replacing addition symbol with a space
            search = /([^&=]+)=?([^&]*)/g,
            decode = function(s) {
                return decodeURIComponent(s.replace(pl, " "));
            },
            query = window.location.search.substring(1);

    urlParams = {};
    while (match = search.exec(query)) {
        if (decode(match[2]) !== '')
            urlParams[decode(match[1])] = decode(match[2]);
    }

    return urlParams;
}

function parseFormData(query) {
    var formData,
            match,
            pl = /\+/g, // Regex for replacing addition symbol with a space
            search = /([^&=]+)=?([^&]*)/g,
            decode = function(s) {
                return decodeURIComponent(s.replace(pl, " "));
            };

    formData = {};

    while (match = search.exec(query)) {
        if (decode(match[2]) !== '')
            formData[decode(match[1])] = decode(match[2]);
    }

    return formData;
}


function getPaginationNumber(current_page, last_page) {
    size = 5;
    if (current_page > (size / 2)) {
        start = current_page - size + 3;
        end = current_page + 2;
    } else {
        start = 1;
        end = 5;
    }

    if (start < 1)
        start = 1;

    if (end >= last_page)
        end = last_page;

    res = [];
    for (var i = start; i <= end; i++) {
        res.push(i);
    }

    return res;
}

function getPaginationLink(controller, page) {
    var urlParams = getAllUrlParameter();
    urlParams['page'] = page;
    var url = '/' + controller + '?' + jQuery.param(urlParams);
    return url;
}

function redirect(url) {
    if (typeof url == 'undefined') {
        url = window.location.pathname + window.location.search;
    }
    $('body').append('<a href="' + url + '" class="tmp"></a>');
    $('.tmp').click().remove();
}