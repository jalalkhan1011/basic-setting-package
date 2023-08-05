<?php

use Illuminate\Support\Facades\Route;
use Jalaldev\Basicsetting\BasicSettingController;

Route::resource('basicsettings', BasicSettingController::class);