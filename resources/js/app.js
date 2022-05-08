require('./bootstrap');



import $ from 'jquery';
window.$ = window.jQuery = $;
jquery.start();

import Echo from "laravel-echo"

window.io = require('socket.io-client');

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});
let userid=$('meta[name=user_id]').attr('content');

window.Echo.channel('laravel_database_private-App.Models.User.' + userid)
    .notification((e) => {
        if (e.type=='App\\Notifications\\NewCourseNotify'){
            console.log(e);

        }

    });






