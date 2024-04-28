<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->name('dashboard');

// Route::get('/landing-page', function () {
//     return view('user.index');
// })->name('homepage');

Route::get('/transactions', function () {
    return view('admin.transactions.index');
})->name('transactions');

// Route::get('/transactions/edit', function () {
//     return view('admin.transactions.edit');
// })->name('transactions.edit');

// Route::get('/transactions/detail', function () {
//     return view('admin.transactions.show');
// })->name('transactions.detail');

// Route::get('/product', function () {
//     return view('admin.product.index');
// })->name('product');

// Route::get('/product/detail', function () {
//     return view('admin.product.show');
// })->name('product.detail');

// Route::get('/product/edit', function () {
//     return view('admin.product.edit');
// })->name('product.edit');

// Route::get('/product/create', function () {
//     return view('admin.product.create');
// })->name('product.create');

route::resource("product", ProductController::class);


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


require __DIR__ . '/auth.php';
