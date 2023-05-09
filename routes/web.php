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
    $links = [
        "characters",
        "comics",
        "movies",
        "tv",
        "games",
        "collectibles",
        "videos",
        "fans",
        "news",
        "shop"
    ];

    $comics = config('comics');

    $shop_links = [
        [
            "text" => "digital comics",
            "img" => "/img/buy-comics-digital-comics.png"
        ],
        [
            "text" => "dc merchandise",
            "img" => "/img/buy-comics-merchandise.png"
        ],
        [
            "text" => "subscription",
            "img" => "/img/buy-comics-shop-locator.png"
        ],
        [
            "text" => "comic shop locator",
            "img" => "/img/buy-comics-subscriptions.png"
        ],
        [
            "text" => "dc power visa",
            "img" => "/img/buy-dc-power-visa.svg"
        ]
    ];


    return view('home', compact('links', 'comics', 'shop_links'));
});
