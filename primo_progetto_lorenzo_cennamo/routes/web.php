<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/homepage', function (){
    return view('homepage');
})->name('homepage');



Route::get('/servizi', function(){
    return view('services');
})->name('servizi');



Route::get('/chi-siamo', function(){
    $aulab = [
        ['id' => 1, 'name' => 'Alessandro', 'surname' => 'Leo', 'age' => 30],
        ['id' => 2, 'name' => 'Angelo', 'surname' => 'Cardone', 'age' => 25],
        ['id' => 3, 'name' => 'Vlaerio', 'surname' => 'Vacca', 'age' => 35],
        ['id' => 4, 'name' => 'Roberto', 'surname' => 'Russo', 'age' => 40],
    ];
    return view('about', ['staff' => $aulab]);
})->name('chi-siamo');

Route::get('/chi-siamo/dettaglio/{indice}', function($id){
    $aulab = [
        ['id' => 1, 'name' => 'Alessandro', 'surname' => 'Leo', 'age' => 30],
        ['id' => 2, 'name' => 'Angelo', 'surname' => 'Cardone', 'age' => 25],
        ['id' => 3, 'name' => 'Vlaerio', 'surname' => 'Vacca', 'age' => 35],
        ['id' => 4, 'name' => 'Roberto', 'surname' => 'Russo', 'age' => 40],
    ];

    foreach($aulab as $insegnante){
        if($id == $insegnante['id']){
            return view('dettaglio', ['personale' => $insegnante]); 
        }
    }
})->name('dettaglio-aulab');