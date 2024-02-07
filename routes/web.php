<?php

use App\Http\Controllers\AddUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookModifyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RentController;
use App\Models\Kelas;

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


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/', [BookController::class, 'home']);
Route::get('/home', [BookController::class, 'home']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('singlebook/{slug}',[BookController::class, 'singlepost']);
Route::post('singlebook/{title}',[RentController::class, 'store'])->name('pinjam');



Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });
    // Route::get('/dashboard/data-buku', function(){return view('dashboard.petugas.index');});
    
    Route::get('/dashboard/data-user', [UserController::class, 'show']);
    Route::get('/dashboard/admin/adduser', [AddUserController::class, 'show']);
    // Route::put('/dashboard/admin/editcategory{category_name}', [CategoryController::class, 'update'])->name('cat.edit');
    
    Route::post('/dashboard/admin/adduser', [AddUserController::class, 'store']);
    Route::get('/dashboard/edituser/{slug}', [AddUserController::class, 'editview']);
    Route::get('/dashboard/edituser/editpassword/{slug}', [AddUserController::class, 'editpassview']);
    Route::post('/dashboard/edituser/editpassword/{slug}', [AddUserController::class, 'editpass']);
    Route::put('/dashboard/edituser/{slug}', [AddUserController::class, 'update'])->name('user.update');
    Route::delete('/dashboard/data-user{slug}', [AddUserController::class, 'destroy'])->name('user.delete');
    
    
    Route::get('/books', [BookController::class, 'books']);
    // Route::get('/books/search', [BookController::class, 'search'])->name('books.search');
    Route::get('/search', [BookController::class, 'search'])->name('books.search');
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    
    Route::get('/dashboard/data-buku', [BookController::class, 'show']);
    Route::get('/dashboard/data-peminjaman', [RentController::class, 'show']);
    Route::get('/dashboard/data-pinjam', [RentController::class, 'showuser']);
    Route::get('/dashboard/data-riwayat', [RentController::class, 'riwayatshow']);
    Route::get('/dashboard/riwayat', [RentController::class, 'riwayatuser'])->name('riwayat.user');
    Route::post('/dashboard/data-peminjaman{book}', [RentController::class, 'return'])->name('kembali'); 
    Route::put('/dashboard/data-peminjaman{book}', [RentController::class, 'ditolak'])->name('ditolak'); 
    Route::get('/dashboard/data-buku/addbook', [BookModifyController::class, 'show']);
    Route::post('/dashboard/data-buku/addbook', [BookModifyController::class, 'store']);
    Route::get('/dashboard/data-peminjaman/pdf-report', [RentController::class, 'pdf']);
    Route::delete('/dashboard/data-buku{slug}', [BookModifyController::class, 'destroy'])->name('book.delete');
    Route::put('/dashboard/editbook/{slug}', [BookModifyController::class, 'update'])->name('book.update');
    Route::get('/dashboard/editbook/{slug}', [BookModifyController::class, 'editview'])->name('book.view');
    
    Route::get('/dashboard/admin/addcategory', [CategoryController::class, 'show']);
    Route::get('/dashboard/admin/categoryadd', [CategoryController::class, 'showadd']);
    Route::post('/dashboard/admin/categoryadd', [CategoryController::class, 'store']);
    Route::get('/dashboard/admin/editcategory/{category_name}', [CategoryController::class, 'editview']);
    Route::put('/dashboard/admin/editcategory/{category_name}', [CategoryController::class, 'update'])->name('category.edit')->middleware('admin');
    Route::delete('/dashboard/admin/addcategory{category_name}', [CategoryController::class, 'destroy'])->name('cat.delete');
    
    Route::get('/dashboard/admin/kelas', [KelasController::class, 'show']);
    Route::get('/dashboard/admin/kelasadd', [KelasController::class, 'showadd']);
    Route::post('/dashboard/admin/kelasadd', [KelasController::class, 'store']);
    Route::delete('/dashboard/admin/kelasadd{name}', [KelasController::class, 'destroy'])->name('kelas.delete');
    Route::get('/dashboard/admin/kelas{name}', [KelasController::class, 'editview']);
    Route::put('/dashboard/admin/kelas{name}', [KelasController::class, 'update'])->name('kelas.edit')->middleware('admin');
});


