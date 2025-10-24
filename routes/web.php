<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/', function () {
   return view('Home');
});

// Route::get('/Delete', function () {
//     return view('Delete');
// });
// Route::get('/Update', function () {
//     return view('Update');
// });
// Route::get('/Detail', function () {
//     return view('Detail');



// });

Route::get('/', [EmployeeController::class, 'index'])->name('Home');

 Route::get('/Add', function () {
     return view('Add');
})->name('Add');


 Route::post('/Add',[EmployeeController::class,'store'])->name('Add');




Route::get('/Detail/{employee}', [EmployeeController::class, 'show'])->name('Detail');

// Route::get('/Detail/{employee}', [EmployeeController::class, 'show'])->name('Detail');



//  Route::put('/Update',[EmployeeController::class,'update'])->name('Update');

// Route::get('/',[EmployeeController::class,'index'])->name('Home');