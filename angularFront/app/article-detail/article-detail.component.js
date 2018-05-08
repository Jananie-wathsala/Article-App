/**
 * Created by techorin on 4/27/2018.
 */
'use strict';
angular.
module('articleDetail').
component('articleDetail', {
        templateUrl: 'article-detail/article-detail.template.html',
        controller:  ['$http', '$routeParams',
            function ArticleDetailController($http, $routeParams) {
                var self = this;
            $http.get('http://127.0.0.1:8001/api/articles/'+$routeParams.articleId+'.json').then(function (response) {
                self.article = response.data;
                console.log(self.article);
            });
        }]
    }
);



