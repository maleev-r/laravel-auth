<?php
use \LuckyRomka\LaravelAuth\Controllers\LaravelAuthController;
Route::get('/login',[LaravelAuthController::class,'index']);
