<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

Route::get('/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'es'])) {
        return response()->view('404', [], 404);
    }

    App::setLocale($locale);

    return view('index');
})->name('index');

Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');