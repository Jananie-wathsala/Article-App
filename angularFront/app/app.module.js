'use strict';

// Define the `artilceApp` module
angular.module('articleApp', [
    // ...which depends on the `articleList` module
    'ngRoute',
    'articleDetail',
    'articleList',

]);
