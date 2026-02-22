<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\Admin\LeadsController as AdminLeadsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LeadController::class, 'index'])->name('landing');
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');

Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/leads', [AdminLeadsController::class, 'index'])->name('admin.leads');
});
