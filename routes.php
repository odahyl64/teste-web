<?php

Route::get('usuarios', ['as'=> 'users.index', function () {
    return 'users';

}]);

Route::get('/', function () {
    return redirect-> route('users.index');

});