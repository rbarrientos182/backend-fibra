<?php
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EvidenceController;
use Illuminate\Support\Facades\Route;

// Rutas Públicas
Route::post('/login', [AuthController::class, 'login']);

// Rutas Protegidas (Requieren Token)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // CRUD de Evidencias
    Route::apiResource('evidencias', EvidenceController::class);
});