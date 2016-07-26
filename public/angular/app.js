var app = angular.module('RedisApp', ['btford.socket-io']);

app.factory('mySocket', function (socketFactory) {
  
  var myIoSocket = io.connect('http://localhost:3000');

  mySocket = socketFactory({

    ioSocket: myIoSocket

  });

  return mySocket;

});

app.controller('AppCtrl', function($scope, mySocket) {
    

  $scope.greeting = 'Hello world';

  $scope.messages = [];  
  
  mySocket.on('test-channel:UserSignedUp', function (data) {

    $scope.messages.push(data.username);


  });

});   