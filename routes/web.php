<?php

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

use App\Http\Controllers\Dashboard\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.layouts.index');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/settings', function () {
        return view('dashboard.setting');
    })->name('settings');
    Route::post('/settings/update', [SettingController::class, 'update'])->name('setting.update');
});
