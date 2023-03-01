<?php

Route::group(['middleware' => config('menu.middleware')], function () {
    //Route::get('wmenuindex', array('uses'=>'\Farindra\Menugenerator\Controllers\MenuController@wmenuindex'));
    $path = rtrim(config('menu.route_path'));
    Route::post($path . '/addcustommenu', array('as' => 'haddcustommenu', 'uses' => '\Farindra\Menugenerator\Controllers\MenuController@addcustommenu'));
    Route::post($path . '/deleteitemmenu', array('as' => 'hdeleteitemmenu', 'uses' => '\Farindra\Menugenerator\Controllers\MenuController@deleteitemmenu'));
    Route::post($path . '/deletemenug', array('as' => 'hdeletemenug', 'uses' => '\Farindra\Menugenerator\Controllers\MenuController@deletemenug'));
    Route::post($path . '/createnewmenu', array('as' => 'hcreatenewmenu', 'uses' => '\Farindra\Menugenerator\Controllers\MenuController@createnewmenu'));
    Route::post($path . '/generatemenucontrol', array('as' => 'hgeneratemenucontrol', 'uses' => '\Farindra\Menugenerator\Controllers\MenuController@generatemenucontrol'));
    Route::post($path . '/updateitem', array('as' => 'hupdateitem', 'uses' => '\Farindra\Menugenerator\Controllers\MenuController@updateitem'));
});
