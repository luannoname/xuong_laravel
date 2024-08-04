<?php

use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\OrderController as ClientOrderController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});





// Route::get('client/index', [ClientController::class, 'index'])->name('client.index');

Route::prefix('client')->name('client.')->group(function () {
    // Route::get('home', [ClientController::class, 'index'])->name('home');
    Route::get('catalog', [ClientController::class, 'catalog'])->name('catalog');
    Route::get('bill', [ClientController::class, 'bill'])->name('bill');
    Route::get('cart', [ClientController::class, 'cart'])->name('cart');
    Route::get('checkout', [ClientController::class, 'checkout'])->name('checkout');
    Route::get('login', [ClientController::class, 'login'])->name('login');
    Route::get('register', [ClientController::class, 'register'])->name('register');
    Route::get('product-detail', [ClientController::class, 'productDetail'])->name('product-detail');
});

Route::get('login', [AuthController::class, 'showFormLogin'])->name('showFormLogin');
Route::post('login', [AuthController::class, 'login'])->name('login')->name('login');

Route::get('register', [AuthController::class, 'showFormRegister'])->name('showFormRegister');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('admin', function () {
//     return '123';
// })->middleware(['auth', 'auth.admin']);

// Route::middleware('auth')->group(function () {
//     Route::get('home', function () {
//         return view('home');
//     });

//     Route::middleware('auth.admin')->group(function () {
//         return 'fafa';
//     });
// });


// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/', [HomeController::class, 'index'])->name('admin.home');
// });

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');
//     Route::get('category-list', [CategoryController::class, 'index'])->name('category_list');
// });

Route::middleware(['auth', 'auth.admin'])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::prefix('categories')
    ->as('categories.')
    ->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/show/{id}', [CategoryController::class, 'show'])->name('show');
        Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [CategoryController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('products')
    ->as('products.')
    ->group(function () {
        Route::get('/', [AdminProductController::class, 'index'])->name('index');
        Route::get('/create', [AdminProductController::class, 'create'])->name('create');
        Route::post('/store', [AdminProductController::class, 'store'])->name('store');
        Route::get('/show/{id}', [AdminProductController::class, 'show'])->name('show');
        Route::get('{id}/edit', [AdminProductController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [AdminProductController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [AdminProductController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('orders')
    ->as('orders.')
    ->group(function () {
        Route::get('/', [AdminOrderController::class, 'index'])->name('index');
        Route::get('/show/{id}', [AdminOrderController::class, 'show'])->name('show');
        Route::put('{id}/update', [AdminOrderController::class, 'update'])->name('update');
        Route::delete('/destroy/{id}', [AdminOrderController::class, 'destroy'])->name('destroy');
    });
    
}); 

Route::prefix('client')->as('client.')->group(function () {
    Route::get('/home', function () {
        return view('client.home');
    })->name('home');
    Route::get('/home', [ClientProductController::class, 'index'])->name('home');
    
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart/list', [CartController::class, 'list'])->name('cart.list');
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');


    Route::get('/order/{order}/bill', [ClientOrderController::class, 'bill'])->name('order.bill');
    Route::get('/order/create', [ClientOrderController::class, 'create'])->name('order.create');
    Route::post('/order/store', [ClientOrderController::class, 'store'])->name('order.store');
    Route::get('/order/index', [ClientOrderController::class, 'index'])->name('order.index');
    Route::get('/order/show/{id}', [ClientOrderController::class, 'show'])->name('order.show');
    Route::put('/order/{id}/update', [ClientOrderController::class, 'update'])->name('order.update');
    
    Route::prefix('product')
    ->as('product.')
    ->group(function () {
        Route::get('/detail/{id}', [ClientProductController::class, 'detail'])->name('detail');
    });

    // Route::prefix('categories')
    // ->as('categories.')
    // ->group(function () {
    //     Route::get('/', [CategoryController::class, 'index'])->name('index');
    //     Route::get('/create', [CategoryController::class, 'create'])->name('create');
    //     Route::post('/store', [CategoryController::class, 'store'])->name('store');
    //     Route::get('/show/{id}', [CategoryController::class, 'show'])->name('show');
    //     Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('edit');
    //     Route::put('{id}/update', [CategoryController::class, 'update'])->name('update');
    //     Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    // });

    // Route::prefix('products')
    // ->as('products.')
    // ->group(function () {
    //     Route::get('/', [ProductController::class, 'index'])->name('index');
    //     Route::get('/create', [ProductController::class, 'create'])->name('create');
    //     Route::post('/store', [ProductController::class, 'store'])->name('store');
    //     Route::get('/show/{id}', [ProductController::class, 'show'])->name('show');
    //     Route::get('{id}/edit', [ProductController::class, 'edit'])->name('edit');
    //     Route::put('{id}/update', [ProductController::class, 'update'])->name('update');
    //     Route::delete('/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy');
    // });
    
}); 

