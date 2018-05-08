'use strict';

// Register `articleList` component, along with its associated controller and template
angular.
  module('articleList').
  component('articleList', {
    templateUrl: 'article-list/article-list.template.html',
    controller: function ArticleListController($http) {
      var self = this;
      self.orderProp = 'title';

      $http.get('http://127.0.0.1:8001/api/articles').then(function(response) {

        self.articles = response.data;
      });
    }
  });
