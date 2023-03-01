<?php

Route::group(['middleware' => config('menu.middleware')], function () {
    //Route::get('wmenuindex', array('uses'=>'\Farindra\Menugenerator\Controllers\MenuController@wmenuindex'));
    $path = rtrim(config('menu.route_path'));
    Route::post($path . '/addcustommenu', array('uses' => '\Farindra\Menugenerator\Controllers\MenuController@addcustommenu'));
    Route::post($path . '/deleteitemmenu', array('uses' => '\Farindra\Menugenerator\Controllers\MenuController@deleteitemmenu'));
    Route::post($path . '/deletemenug', array('uses' => '\Farindra\Menugenerator\Controllers\MenuController@deletemenug'));
    Route::post($path . '/createnewmenu', array('uses' => '\Farindra\Menugenerator\Controllers\MenuController@createnewmenu'));
    Route::post($path . '/generatemenucontrol', array('uses' => '\Farindra\Menugenerator\Controllers\MenuController@generatemenucontrol'));
    Route::post($path . '/updateitem', array('uses' => '\Farindra\Menugenerator\Controllers\MenuController@updateitem'));
});
