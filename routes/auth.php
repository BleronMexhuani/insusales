<?php

use App\Http\Controllers\AudioLeadController;
use App\Http\Controllers\AudioScrapController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ConfirmationLeadController;
use App\Http\Controllers\DashboardStatisticsController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\QualityLeadController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SellerLeadController;
use App\Http\Controllers\UserController;
use App\Models\LeadCustomFields;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    });
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    //Import
    Route::resource('imports', ImportController::class);
    //Roles
    Route::resource('roles', RoleController::class);
    //Users
    Route::resource('users', UserController::class);
    //Call Agent
    Route::resource('leads', LeadController::class);
    //Leads
    Route::resource('leadcustomfields', LeadCustomFields::class);

    //Audio Quality
    Route::group(['middleware' => ['can:upload audio']], function () {
        Route::resource('audios', AudioLeadController::class);
        Route::get('deleteAudio', [AudioLeadController::class, 'deleteAudio'])->name('deleteAudio');
    });
    //Quality Agent
    Route::resource('qualityleads', QualityLeadController::class);
    //Confirmation Agent
    Route::resource('confirmationleads', ConfirmationLeadController::class);
    //Seller 
    Route::resource('sellerleads', SellerLeadController::class);
    //Permission for sharing leads
    Route::post('leads/shareLead', [LeadController::class, 'shareLead'])->name('leads.share');

    //Dashboard Statistics 
    Route::get('boxesStatistic', [DashboardStatisticsController::class, 'boxesStatistic'])->name('boxesStatistic');
    Route::get('terminiert', [DashboardStatisticsController::class, 'terminiert'])->name('terminiert');
    Route::get('quality', [DashboardStatisticsController::class, 'quality'])->name('quality');
    Route::get('confirmed', [DashboardStatisticsController::class, 'confirmed'])->name('confirmed');
    Route::get('terminConversionRate', [DashboardStatisticsController::class, 'terminConversionRate'])->name('terminConversionRate');
    Route::get('qualityConversionRate', [DashboardStatisticsController::class, 'qualityConversionRate'])->name('qualityConversionRate');
    Route::get('confirmationConversionRate', [DashboardStatisticsController::class, 'confirmationConversionRate'])->name('confirmationConversionRate');
    
    Route::get('/scrape-upload', [AudioScrapController::class, 'scrapeAndUpload'])->name('scrape');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
