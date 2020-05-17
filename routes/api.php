<?php

Route::resource('stations', 'StationController', [
    'except' => ['create', 'edit']
]);