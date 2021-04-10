<?php

Route::group(['prefix' => 'api/exponent/devices'], function () {
    Route::post('subscribe', [
        NotificationChannels\ExpoPushNotifications\Http\ExpoController::class,
        'subscribe',
    ])->name('register-interest');

    Route::post('unsubscribe', [
        NotificationChannels\ExpoPushNotifications\Http\ExpoController::class,
        'unsubscribe'
    ])->name('remove-interest');
});
