<?php

use Illuminate\Support\Facades\Route;

Route::get('/log', function () {
    logger()->debug("debug");
    logger()->info("info");
    logger()->warn("warn");
    logger()->error("error!");
});
