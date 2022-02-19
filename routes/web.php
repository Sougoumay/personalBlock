<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::view('/essai','layouts.essai');

Route::get('/getAddAcademicBackgroundForm',[SkillController::class,'getAddAcademicBackgroundForm'])
    ->name('getAddAcademicBackgroundForm');

Route::post('/addAcademicBackground',[SkillController::class,'addAcademicBackground'])
    ->name('addAcademicBackground');

Route::get('/getEditAcademicBackground/{id}',[SkillController::class,'getEditAcademicBackgroundForm'])
    ->name('getEditAcademicBackgroundForm')->where(['id'=>'[0-9]+']);

Route::post('/editAcademicBackground/{id}',[SkillController::class,'editAcademicBackground'])
    ->name('editAcademicBackground')->where(['id'=>'[0-9]+']);

Route::get('/getAddLanguageForm',[SkillController::class,'getAddLanguageForm'])->name('getAddLanguageForm');

Route::post('/addLanguage',[SkillController::class,'addLanguage'])->name('addLanguage');

Route::get('/getEditLanguageForm/{id}',[SkillController::class,'getEditLanguageForm'])->name('getEditLanguageForm')
    ->where(['id'=>'[0-9]+']);

Route::post('/editLanguage/{id}',[SkillController::class,'editLanguage'])->name('editLanguage')
    ->where(['id'=>'[0-9]+']);

Route::get('/getAddHobbyForm',[SkillController::class,'getAddHobbyForm'])->name('getAddHobbyForm');

Route::post('/addHobby',[SkillController::class,'addHobby'])->name('addHobby');

Route::get('/getAddSoftwareForm',[SkillController::class,'getAddSoftwareForm'])->name('getAddSoftwareForm');

Route::post('/addSoftware',[SkillController::class,'addSoftware'])->name('addSoftware');

Route::get('/viewArticle/{id}',[ArticleController::class,'viewArticle'])
    ->name('viewArticle')->where(['id'=>'[0-9]+']);

Route::post('/createRemark/{id}',[ArticleController::class,'createRemark'])->name('createRemark')
    ->where(['id'=>'[0-9]+']);

Route::get('/allArticle',[ArticleController::class,'allArticle'])->name('allArticle');

Route::view('/layouts','layouts.main_layouts');

Route::view('/createArticle','articles.create_articles')->name('create_article');

Route::post('/createArticle',[ArticleController::class,'createArticle'])->name('createArticle');

Route::view('/index','index');

Route::view('/login','login');

Route::view('/registre','registre');

Route::get('/homePage',[UserController::class,'homePage'])->name('homePage');

Route::get('/', function () {
    return view('welcome');
});
