<?php

use App\Http\Controllers\ProfileController;
use App\Models\Lead;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    if(Auth::user()->can('see all leads')){
      $agents = User::all();
      $terminiert = Lead::where('feedback_status', 'Terminiert')->whereDate('created_at', Carbon::today())->count();
            $quality = Lead::where('quality_status', 'confirmed')->whereDate('created_at', Carbon::today())->count();
            $confirmed = Lead::where('confirmation_status', 'confirmed')->whereDate('created_at', Carbon::today())->count();
      return view('dashboard',compact('agents','terminiert','quality','confirmed'));
  }
  else if(Auth::user()->can('call agent check')){
      return redirect('leads');
  }
  else if(Auth::user()->can('quality check')){
      return redirect('qualityleads');
  }
  else if(Auth::user()->can('confirmation check')){
      return redirect('confirmationleads');
  }
  else if(Auth::user()->can('upload audio')){
      return redirect('audios');
  }

  else if(Auth::user()->can('seller')){
      return redirect('sellerleads');
  }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
