<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
    //return "<h1>Hello, welcome to the Pet Adoption App! ❤</h1>";
});

Route::get('sayhello/{name}', function () {
    return "<h1>Hello ".request()->name." ❤</h1>";
});

// Route to show all pets
Route::get('pets/all', function () {
    $pets = \App\Models\Pet::all();
    //return var_dump($pets->toArray());
    dd($pets->toArray()); // Dump and Die
});

// Route to show one pet by ID | Por mi
Route::get('pets/{id}', function ($id) {
    $pets = \App\Models\Pet::find($id);
    //return var_dump($pets->toArray());
    dd($pets->toArray()); // Dump and Die
});

// Route to show one pet by ID | Por OFAC
// Route::get('pets/{id}', function () {
//     $pets = \App\Models\Pet::find(request()->id);  // Recoje el id por get
//     //return var_dump($pets->toArray());
//     dd($pets->toArray()); // Dump and Die
// });

Route::get('petsview', function() {
    $pets = \App\Models\Pet::all();
    return view('pets-view')->with('pets', $pets);

});

Route::get('petview/{id}', function() {
    $pet = App\Models\Pet::find(request()->id);  // Recoje el id por get
    return view('pet-view')->with('pet', $pet);

});



// Route challengue
Route::get('challengue/users', function () {
    $users = User::limit(20)->get();
    $code = "
    
    
               ";
    foreach ($users as $user) {
        $code .= ($user->id%2 == 0) ? "<tr style='background: #ddd'>" : "<tr>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>".$user->id."</td>"; 
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'><img src='".asset('images/'.$user->photo)."' width='40px'></td>";
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>".$user->fullname."</td>"; 
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>".Carbon\Carbon::parse($user->birthdate)->age." years old</td>"; 
        $code .= "<td style='border: 1px solid gray; padding: 0.4rem'>".$user->id."</td>"; 
    }
      
}); 





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
