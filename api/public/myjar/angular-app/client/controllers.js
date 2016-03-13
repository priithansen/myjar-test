'use strict';

/* Client Controllers */

angular.module('client.controllers', [
	'client.overview.controllers',
	'client.update.controllers',
	'angularModalService'
	]).

	controller('ClientController',
		['$scope', 'clientFactory', 'productFactory', function($scope, clientFactory, productFactory) {

			$scope.loanRequestData = {
				data: $scope.loanRequestData
			};

			$scope.selectProduct = function(product) {
				$scope.activeProduct = product;

				$scope.loanDuration = moment().add(product.days_max - product.days_min + 1, 'days').diff(moment().startOf('day'), 'days');
			};

			productFactory.getAllProducts().then(function(result) {
				$scope.products = result.data.data;

				$scope.selectProduct($scope.products[0]);
			}, function(error) {
				console.error(error);
			});

	}]);