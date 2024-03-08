<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
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

// Siswa

// Main Index Siswa
Route::get('/', [SiswaController::class, 'index'])->name('index');
// - Main Index Siswa

// Add Data Siswa

// Get HTML form
Route::get('/upload', [SiswaController::class, 'upload']);
// - Get HTML form

// Post the new data
Route::post('/create', [SiswaController::class, 'create'])->name('create');
// - Post the new data

// - Add Data Siswa

// Show Details Siswa
Route::get('/show/{id}', [SiswaController::class, 'show'])->name('show');
// - Show Details Siswa

// Edit Data Siswa

// Show old Siswa data and get HTML form
Route::get('/edit/{id}', [SiswaController::class, 'edit'])->name('edit');
// - Show old Siswa data and get HTML form

// Post the edited data 
Route::post('/change', [SiswaController::class, 'change'])->name('change');
// - Post the edited data

// - Edit Data Siswa

// Delete
Route::delete('/delete/{id}', [SiswaController::class, 'delete'])->name('delete');
// - Delete

// - Siswa

// Mobil

// Main Index Mobil
Route::get('/inventory', [SiswaController::class, 'invent'])->name('invent');
// - Main Index Mobil

// Add Data Mobil

// Get HTML form
Route::get('/uploadmobil', [SiswaController::class, 'upload_mobil'])->name('uploadmobil');
// - Get HTML form

// Post the new Mobil data
Route::post('/createmobil', [SiswaController::class, 'create_mobil'])->name('create-mobil');
// - Post the new Mobil data

// - Add Data Mobil

// Edit Mobil Data

// Show old Mobil data and get HTML form
Route::get('/editmobil/{id}', [SiswaController::class, 'edit_mobil'])->name('editmobil');
// - Show old Mobil data and get HTML form

// Post the edited data
Route::post('/changemobil', [SiswaController::class, 'change_mobil'])->name('changemobil');
// - Post the edited data

// - Edit Mobil Data

// Delete mobil
Route::delete('/deletemobil/{id}', [SiswaController::class, 'delete_mobil'])->name('deletemobil');
// - Delete mobil


// -Mobil

// HP

// Main Index HP
Route::get('/inventoryhp', [SiswaController::class, 'index_hp'])->name('inventhp');
// - Main Index HP

// Input HP
// Get HTML Form
Route::get('/uploadhp', [SiswaController::class, 'upload_hp'])->name('uploadhp');
// - Get HTML Form

// Post HP Data
Route::post('/createhp', [SiswaController::class, 'create_hp'])->name('createhp');
// - Post HP Data
// - Input HP

// Edit HP
// Get old HP data and HTML form
Route::get('/edithp/{id}', [SiswaController::class, 'edit_hp'])->name('edithp');
// - Get old HP data and HTML form

// Post edited HP data
Route::post('/changehp', [SiswaController::class, 'change_hp'])->name('changehp');
// - Post edited HP data
// - Edit HP

// Delete HP Data
Route::delete('/deletehp/{id}', [SiswaController::class, 'delete_hp'])->name('deletehp');
// - Delete HP Data

// Download
Route::get('/download', [SiswaController::class, 'download_siswa'])->name('download');
// - Download


// Users
// Add User
// Route::get('/adduser', [SiswaController::class, 'add_user'])->name('adduser');
// Route::post('/storeuser', [SiswaController::class, 'store_user'])->name('storeuser');
// // - Add User


// // Login
// Route::get('/login', [AuthController::class, 'login_form'])->name('login_form');
// Route::post('/login', [AuthController::class, 'login'])->name('login');
// // - Login

// // Logout
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// // - Logout

// // Middleware
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/dashboard', [SiswaController::class, 'index_user'])->name('userdashboard');
// });

// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/dashboard', [SiswaController::class, 'index'])->name('admindashboard');
// });
// - Middleware
// - Users

