<?php

Route::get('weather',[\Haseeb\Weather\Http\Controllers\WeatherController::class,'index']);
//Route::get('/weather', [WeatherController::class, 'index']);
