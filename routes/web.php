<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    // admin panel home
    Route::get('/', 'MainController@index');

    //user update
    Route::post('update/information', 'MainController@update');
    //inner page
    Route::get('inner/dashboard/{id}', 'MainController@inner_view');

    //about
    Route::get('inner/about', 'Portfolio\AboutController@index');
    Route::post('inner/about/save', 'Portfolio\AboutController@save');
    Route::post('inner/about/edit', 'Portfolio\AboutController@edit');

    //education
    Route::get('inner/education', 'Education\EducationController@index');
    Route::post('inner/education/save', 'Education\EducationController@save');
    Route::post('inner/education/edit', 'Education\EducationController@edit');
    Route::get('inner/education/del/{id}', 'Education\EducationController@del');

    //experience
    Route::get('inner/experience', 'Experience\ExperienceController@index');
    Route::post('inner/experience/save', 'Experience\ExperienceController@save');
    Route::post('inner/experience/edit', 'Experience\ExperienceController@edit');
    Route::get('inner/experience/del/{id}', 'Experience\ExperienceController@del');

    //skill
    Route::get('inner/skill', 'Skill\SkillController@index');
    Route::post('inner/skill/save', 'Skill\SkillController@save');
    Route::post('inner/skill/edit', 'Skill\SkillController@edit');
    Route::get('inner/skill/del/{id}', 'Skill\SkillController@del');
});
Auth::routes();
Route::get('logout', 'LogOutController@index');
Route::get('/home', 'HomeController@index')->name('home');
