var formApp = angular.module('formApp', []);
console.log('formApp..');

formApp.controller('formController', function( $scope, $http ) {
    console.log('formController..');

    $scope.formData = {};
    console.log($scope.formData);

    $scope.submitForm = function () {
        consle.log('submitting..');
        $http({
            method: 'Post',
            url: 'form.php',
            data: $scope.formData,
            headers : {'Content-Type':'application/x-www-form-urlencoded; charset=UTF-8'}
        }).success(function(data){

            console.log("OK", data);

        }).error(function(err){
            "ERR", console.log(err);
        });
        console.log($scope.formData);
    
    };
});
