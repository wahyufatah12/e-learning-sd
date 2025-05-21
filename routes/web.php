<?php

use App\Http\Livewire\Kuis;
use App\Livewire\Beranda;
use App\Livewire\Navbar;
use Illuminate\Support\Facades\Route;
use App\Models\Materi;

Route::get('/',Beranda::class)->name('beranda');

Route::get('/materi', function () {
    $materis = Materi::latest()->get();
    return view('livewire/materi', compact('materis'));

});