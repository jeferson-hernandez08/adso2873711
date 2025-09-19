<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('sayhello/{name}', function() {
    return "<h1> Hello ".request()->name." ❤️ </h1>";
});

// Route::get('pets/all', function() {
//     $pets = App\Models\Pet::all();
//     //return var_dump($pets->toArray());
//     dd($pets->toArray()); // Dump & Die
// });

// Route::get('pets/{id}', function() {
//     $pet = App\Models\Pet::find(request()->id);
//     dd($pet->toArray());
// });

// Route::get('petsview', function() {
//     $pets = App\Models\Pet::all();
//     return view('pets-view')->with('pets', $pets);
// });

// Route::get('petsview/{id}', function() {
//     $pet = App\Models\Pet::find(request()->id);
//     return view('pet-view')->with('pet', $pet);
// });

Route::get('challenge/users', function() {
    $users = User::limit(20)->get();
    //dd($users->toArray());
    $code = "<table style='border-collapse: collapse; margin: 2rem auto; font-family: Arial'>
                <tr>
                    <th style='background: gray; color: white; padding: 0.4rem'>Id</th>
                    <th style='background: gray; color: white; padding: 0.4rem'>Photo</th>
                    <th style='background: gray; color: white; padding: 0.4rem'>Fullname</th>
                    <th style='background: gray; color: white; padding: 0.4rem'>Age</th>
                    <th style='background: gray; color: white; padding: 0.4rem'>Created At</th>
                </tr>";
    foreach($users as $user) {
        $code .= ($user->id%2 == 0) ? "<tr style='background: #ddd'>" : "<tr>";
        $code .=    "<td style='border: 1px solid gray; padding: 0.4rem'>".$user->id."</td>";
        $code .=    "<td style='border: 1px solid gray; padding: 0.4rem'><img src='".asset('images/'.$user->photo)."' width='40px'></td>";
        $code .=    "<td style='border: 1px solid gray; padding: 0.4rem'>".$user->fullname."</td>";
        $code .=    "<td style='border: 1px solid gray; padding: 0.4rem'>".Carbon\Carbon::parse($user->birthdate)->age." years old</td>";
        $code .=    "<td style='border: 1px solid gray; padding: 0.4rem'>".$user->created_at->diffForHumans()."</td>";
        $code .= "</tr>";
    }
    return $code . "</table>";
});

Route::get('/dashboard', function(Request $request) {
    if(Auth::user()->role == 'Admin') {
        return view('dashboard-admin');
    } else if(Auth::user()->role == 'Customer')  {
        return view('dashboard-customer');
    } else {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back()->with('error', 'Role no exist!');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => 'admin'], function() {
        Route::resources([
            'users'     => UserController::class,
            'pets'      => PetController::class,
            'adoptions' => AdoptionController::class
        ]);

        // Explicacion Juan David
        //Route::get(('pets/{id}'), [PetController::class, 'dd'])->name('prueba'); // Se agregha

        // Search
        Route::post('search/users', [UserController::class, 'search']);
        Route::post('search/pets', [PetController::class, 'search']);      // Se agregha
        //Route::get('search/adoptions', [AdoptionController::class, 'search'])->name('adoptions.search');
        Route::post('search/adoptions', [AdoptionController::class, 'search']);      // Se agregha

        // PDF 
        Route::get('export/users/pdf', [UserController::class, 'pdf']);
        Route::get('export/pets/pdf', [PetController::class, 'pdf']);     // Se agregha
        Route::get('export/adoptions/pdf', [AdoptionController::class, 'pdf']);     // Se agregha

        // Excel
        Route::get('export/users/excel', [UserController::class, 'excel']);
        Route::get('export/pets/excel', [PetController::class, 'excel']);    // Se agregha
        Route::get('export/adoptions/excel', [AdoptionController::class, 'excel']);    // Se agregha

        Route::post('import/users', [UserController::class, 'import']);
        Route::post('import/pets', [PetController::class, 'import']);       // Se agregha

    });

    //Routes for Costumer
    Route::get('myinfo', [CustomerController::class, 'myInfo']);


});

require __DIR__.'/auth.php';