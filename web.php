<?php
Route::get('/', [PageController::class, 'index']);
Route::get('post', [PageController::class, 'about']);
Route::get('post/{id}', [PageController::class, 'articles']);
?>