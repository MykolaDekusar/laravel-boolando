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

Route::get('/', function () {
    $header_icons = [
        'source1' => [
            'icon' => "https://img.icons8.com/forma-thin/24/user.png",
            'alt' => "User",
        ],
        'source2' => [
            'icon' =>
            "https://img.icons8.com/ios/50/like--v1.png",
            'alt' => "Heart",
        ],
        'source3' => [
            'icon' =>
            "https://img.icons8.com/ios-filled/50/shopping-bag.png",
            'alt' =>
            "Shopping-bag",
        ]
    ];
    $data = [
        'products' => config('products'),
        'header_icons' => $header_icons,
    ];
    return view('home', $data);
})->name('Home');


Route::get('/About', function () {
    $header_icons = [
        'source1' => [
            'icon' => "https://img.icons8.com/forma-thin/24/user.png",
            'alt' => "User",
        ],
        'source2' => [
            'icon' =>
            "https://img.icons8.com/ios/50/like--v1.png",
            'alt' => "Heart",
        ],
        'source3' => [
            'icon' =>
            "https://img.icons8.com/ios-filled/50/shopping-bag.png",
            'alt' =>
            "Shopping-bag",
        ]
    ];
    $data = [
        'header_icons' => $header_icons,
    ];
    return view('about', $data);
})->name('About');
