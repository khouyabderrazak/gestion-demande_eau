<?php

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

Route::post('/message','Demandes@sendMessageGoogle')->name("message");

Route::get('/contact/{lang}','Demandes@contact')->name("contact");

Route::get('/suivi/{lang}','Demandes@suivi')->name("suivi");

Route::POST('/suivi_demande/{lang}','Demandes@suivi_demande')->name("suivi_demande");

Route::get('/depose/{lang}','Demandes@create')->name("depose");

Route::post('/save','Demandes@save')->name("save");

Route::post('/save1','Demandes@save1')->name("save1");

Route::get('/espase_Admin/{lang}','Demandes@espase_Admin')->name("espase_Admin");

Route::post('/admin_test/{lang}','Demandes@admin_test')->name("admin_test");

Route::post('/view','Demandes@view')->name("view") ;

Route::post('/accepte','Demandes@accepte')->name("accepte") ;

Route::post('/refuse','Demandes@refuse')->name("refuse") ;

Route::post('/suivi_demande/{lang}','Demandes@suivi_demande')->name("suivi_demande") ;

Route::post('/pdf','Demandes@pdf')->name("pdf") ;

Route::get('/Pdfa/{id}','Demandes@Pdfa')->name("Pdfa") ;

Route::post('/Pdfim','Demandes@Pdfim')->name("Pdfim") ;

Route::get('/Admin/{lang}','Demandes@admin')->name("Admin") ;

Route::get('/Admina/{lang}','Demandes@admina')->name("Admina") ;

Route::get('/Adminr/{lang}','Demandes@adminr')->name("Adminr") ;

Route::get('/Admint/{lang}','Demandes@admint')->name("Admint") ;

Route::post('/chf/{lang}','Demandes@chf')->name("chf") ;

Route::get('/{lang?}','Actualites@getnew')->name("langue");

Route::POST('/add','Actualites@ajoute_article')->name("add");

