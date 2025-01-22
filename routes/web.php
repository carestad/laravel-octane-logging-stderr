<?php

use Illuminate\Support\Facades\Route;

Route::get('/log', function () {
    logger()->debug("debug log");
    logger()->info("info log");
    logger()->warning("warning log");
    logger()->error("error log!");
});
