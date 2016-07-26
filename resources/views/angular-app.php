<!DOCTYPE html>
<html  ng-app="RedisApp">
    <head>
        <title>Laravel</title>
    </head>
    <body ng-controller="AppCtrl">
        <!-- <ul> -->
            <!-- <li ng-repeat="message in messages"></li> -->
        <!-- </ul> -->
        {{ messages }}
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.8/socket.io.min.js"></script>
        <script type="text/javascript" src="angular/modules/angular-socket-io/socket.js"></script>
        <script type="text/javascript" src="angular/app.js"></script>
    </body>
</html>
