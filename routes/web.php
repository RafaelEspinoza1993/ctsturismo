<?php

use Illuminate\Support\Facades\Route;

Route::get( '/', 'ChallengeController@index')->where('any', '.*');
Route::get( '/ChallengeTwo', 'ChallengeController@index')->where('any', '.*');
Route::get( '/ChallengeThree', 'ChallengeController@index')->where('any', '.*');


Route::get( '/vehicles/{modelyear}/{make}/{model}', 'ChallengeController@ChallengeOne');
Route::post('/vehicles', 'ChallengeController@ChallengeTwo');
Route::get('/vehicles/{modelyear}/{make}/{model}?withRating=true', 'ChallengeController@ChallengeThree');