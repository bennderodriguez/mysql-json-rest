<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    </head>
    <body>
        <div ng-app="myApp" ng-controller="customersCtrl">
            <div class="container">
                <table class="table table-hover table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Titulo</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tr ng-repeat="x in client">
                        <td>{{ x.id}}</td>
                        <td>{{ x.First_Name}}</td>
                        <td>{{ x.Last_Name}}</td>
                        <td>{{ x.Title}}</td>
                        <td>{{ x.Email_Address}}</td>
                    </tr>
                </table>
            </div>
        </div>

        <script>
            var app = angular.module('myApp', []);
            app.controller('customersCtrl', function ($scope, $http) {
                $http.get("restfull.php")
                        .then(function (response) {
                            $scope.client = response.data.client;
                            console.log($scope.client);
                        });
            });
        </script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>
    </body>
</html>