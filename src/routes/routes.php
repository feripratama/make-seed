<?php

Route::group(['prefix' => 'make-seed'], function() {
    Route::get('demo', 'Feripratama\MakeSeed\Http\Controllers\MakeSeedController@demo');
});
