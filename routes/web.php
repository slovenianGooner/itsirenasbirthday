<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect("/30");
});

Route::get('30', function () {
  return view("thirty");
});

Route::get("30/today", function () {
  return view("today");
});

Route::get("30/today/{number}", function ($number) {
  return view("today_$number");
});
