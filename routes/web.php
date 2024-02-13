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

Route::get('/', function () {
    // RECUPERO GLI ARRAY DALLA CARTELLA CONFIG
    $socials = config('footer_socials');
    $header_links = config('header_links');
    $footer_lists = config('footer_list');
    $banner_infos = config('banner_infos');

    // E LI INSERISCO PASSANDOLI CON LA FUNZIONE compact()
    return view('home', compact('socials', 'footer_lists', 'banner_infos', 'header_links'));
})->name('home');

Route::get('/comics', function () {
    // RECUPERO GLI ARRAY DALLA CARTELLA CONFIG
    $socials = config('footer_socials');
    $header_links = config('header_links');
    $footer_lists = config('footer_list');
    $banner_infos = config('banner_infos');
    $comics = config('comics');

    // E LI INSERISCO PASSANDOLI CON LA FUNZIONE compact()
    return view('comics', compact('socials', 'footer_lists', 'banner_infos', 'comics', 'header_links'));
})->name('comics');

Route::get('/comics/comic_info/{param}', function ($param) {
    // RECUPERO GLI ARRAY DALLA CARTELLA CONFIG
    $socials = config('footer_socials');
    $header_links = config('header_links');
    $footer_lists = config('footer_list');
    $banner_infos = config('banner_infos');
    $comics = config('comics');

    // DEFINISCO LA VARIABILIE CHE CONTERRà L'OGGETTO FILTRATO
    $single_comic = NULL;

    // FILTRO L'ARRAY PER OTTENERE L'OGGETTO A CUI L'ID CORRISPONDE AL PARAMETRO PASSATO DA comics.blade.php
    foreach ($comics as $item) {
        if ($item['id'] == $param) {
            $single_comic = $item;
        };
    };

    // E LI INSERISCO PASSANDOLI CON LA FUNZIONE compact()
    return view('comic_detail', compact('socials', 'footer_lists', 'banner_infos', 'comics', 'header_links', 'single_comic'));
})->name('comic_info');

Route::get('/movies', function () {
    // RECUPERO GLI ARRAY DALLA CARTELLA CONFIG
    $socials = config('footer_socials');
    $header_links = config('header_links');
    $footer_lists = config('footer_list');
    $banner_infos = config('banner_infos');

    // E LI INSERISCO PASSANDOLI CON LA FUNZIONE compact()
    return view('movies', compact('socials', 'footer_lists', 'banner_infos', 'header_links'));
})->name('movies');
