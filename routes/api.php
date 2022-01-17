<?php

use Illuminate\Http\Request;

// get auth user id
Route::get('/user', 'UserController@getUserId');

// get all categories
Route::get('/categories', 'CategoryController@getAllCategories');

// get quizzes limit 10
Route::get('/quizzes', 'QuizController@getQuizzes');

// insert percentage of correct to ranking table
Route::post('/rankings/{user}', 'RankingController@insertPercentage');

// get ranking
Route::get('/rankings', 'RankingController@getRanking');

// get all informations
Route::get('/informations', 'InformationController@getAllInformations');
