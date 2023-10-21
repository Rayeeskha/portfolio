<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;


Route::middleware(['auth', 'verified'])->group(function () {
	Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::resources([
        'blog' => \App\Http\Controllers\Backend\BlogController::class,
        'project' => \App\Http\Controllers\Backend\ProjectController::class,
    ]);

    Route::match(['POST','GET'],'/status-change', [\App\Http\Controllers\CommonController::class, 'changeDataTableStatus']);

    Route::match(['POST','GET'],'/delete-datatable-row', [\App\Http\Controllers\CommonController::class, 'deleteDataTableRow']);

});


?>