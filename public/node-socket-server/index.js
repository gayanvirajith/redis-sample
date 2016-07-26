var server = require('http').Server();

var io = require('socket.io')(server);

var Redis = require('ioredis');

var redis = new Redis();

redis.subscribe('test-chanel');

redis.on('message', function(chanel, message){

	console.log('Message recieved');
	console.log('message'); 

});

server.listen(3000, function () {
	console.log('http:localhost:3000 is running...');
});
