<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::resource('produtos', ProdutoController::class);
//Route::resource('users', UserController::class);
Route::get('/', [SiteController::class,'index'])->name('site.index');
Route::get('/produto/{slug}', [SiteController::class,'details'])->name('site.details');
Route::get('/categoria/{id}', [SiteController::class,'categoria'])->name('site.categoria');

Route::get('/carrinho',[ CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');
Route::post('/carrinho',[ CarrinhoController::class, 'adicionaCarrinho'])->name('site.addcarrinho');
Route::post('/remover/carrinho',[ CarrinhoController::class, 'removeCarrinho'])->name('site.removecarrinho');
Route::post('/atualizar/carrinho',[ CarrinhoController::class, 'atualizaCarrinho'])->name('site.atualizacarrinho');
Route::get('/limpar/carrinho',[ CarrinhoController::class, 'limparCarrinho'])->name('site.limparcarrinho');

Route::view('/login','login.form')->name('login.form');
Route::post('/auth',[LoginController::class,'auth'])->name('login.auth');
Route::get('/logout',[LoginController::class,'logout'])->name('login.logout');
Route::get('/register',[LoginController::class,'create'])->name('login.create');

Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('admin.dashboard')->middleware(['auth','checkemail']);
Route::get('/admin/produtos', [ProdutoController::class, 'index'])->name('admin.produtos');
Route::post('/admin/produto/store',[ProdutoController::class,'store'])->name('admin.store');
Route::delete('/admin/produto/delete/{id}',[ProdutoController::class,'destroy'])->name('admin.delete');

Route::get('/admin/categorias',[CategoriaController::class,'index'])->name('admin.categorias');
Route::post('/admin/categoria/store',[CategoriaController::class,'store'])->name('admin.categoria.store');
Route::delete('/admin/categoria/delete/{id}',[CategoriaController::class,'destroy'])->name('admin.categoria.delete');

Route::get('/admin/usuarios',[UserController::class,'index'])->name('admin.usuarios');
Route::post('/admin/usuario/store',[UserController::class,'store'])->name('admin.usuario.store');
Route::delete('/admin/usuario/delete/{id}',[UserController::class,'destroy'])->name('admin.usuario.delete');