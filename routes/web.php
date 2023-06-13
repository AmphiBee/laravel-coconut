<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Nidhalkratos\LaravelCoconut\Events\CoconutNotificationReceived;

Route::middleware(config('coconut.middleware'))->post('/coconut/callback/{videoId}', function ($videoId, Request $request) {
    $body = $request->getContent();
    $webhook = json_decode($body, true);
    event(new CoconutNotificationReceived($videoId, $webhook));
})->name('coconut.callback');
