<?php

Route::group(['middleware' => config('menugenerator.middleware')], function () {
    //Route::get('wmenuindex', array('uses'=>'\Farindra\Menugenerator\Controllers\MenuController@wmenuindex'));
    $path = rtrim(config('menugenerator.route_path'));
    Route::post($path . '/addcustommenu', array('as' => 'addcustommenu', 'uses' => '\Farindra\Menugenerator\Controllers\MenuController@addcustommenu'));
    Route::post($path . '/deleteitemmenu', array('as' => 'deleteitemmenu', 'uses' => '\Farindra\Menugenerator\Controllers\MenuController@deleteitemmenu'));
    Route::post($path . '/deletemenug', array('as' => 'deletemenug', 'uses' => '\Farindra\Menugenerator\Controllers\MenuController@deletemenug'));
    Route::post($path . '/createnewmenu', array('as' => 'createnewmenu', 'uses' => '\Farindra\Menugenerator\Controllers\MenuController@createnewmenu'));
    Route::post($path . '/generatemenucontrol', array('as' => 'generatemenucontrol', 'uses' => '\Farindra\Menugenerator\Controllers\MenuController@generatemenucontrol'));
    Route::post($path . '/updateitem', array('as' => 'updateitem', 'uses' => '\Farindra\Menugenerator\Controllers\MenuController@updateitem'));
});
