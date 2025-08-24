<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\TwoFactorAuthentication;
use App\Livewire\Ventas\RegistroVenta;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get("/login", Login::class)->name("login");
Route::get("/login/two-factor", TwoFactorAuthentication::class)->name("two.factor");
Route::get("/logout", function () {
  Session::forget('user');
  return redirect()->route('login');
})->name("logout");


Route::get("/ventas", RegistroVenta::class)->name("ventas");
