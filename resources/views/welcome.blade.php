<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <ul>
            <li v-repeat="user: users">@{{ user }}</li>
        </ul>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.16/vue.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.4.8/socket.io.min.js"></script>
        <script type="text/javascript">

            var socket = io('http://localhost:3000');

            new Vue({

                el: 'body',
                
                data: {
                    users: []
                },

                ready: function () {
                    socket.on('test-channel:UserSignedUp', function (data) {
                        this.users.push(data.username);
                    }.bind(this));
                }
            })
        </script>
    </body>
</html>
