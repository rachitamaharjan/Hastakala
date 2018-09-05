<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontpage');
});

Route::get('/authors', array('as'=>'authors','uses'=>'authors@index'));

Route::get('/authors/new', array('as'=>'newAuthor','uses'=>'authors@new'));

Route::resource('posts','postController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('product/create', 'products');

Route::middleware(['auth','artist'])->group(function(){


Route::get('/product/create','productController@create' );

Route::post('/products','productController@store' )->name('products.store');

Route::get('/product/{products}','productController@show' )->name('products.show');

Route::get('/product/{products}/edit','productController@edit' )->name('products.edit');

Route::put('/product/{products}','productController@update' )->name('products.update');

Route::delete('/products/{products}','productController@destroy' )->name('products.destroy');



});

//Route::get('/artist/create','artistController@create' );

//Route::post('/products','productController@store' )->name('products.store');

//Route::get('/product/{products}','productController@show' )->name('products.show');

//Route::get('/product/{products}/edit','productController@edit' )->name('products.edit');

//Route::put('/product/{products}','productController@update' )->name('products.update');

//Route::delete('/products/{products}','productController@destroy' )->name('products.destroy');

//Route::get('/products/','productController@index' )->name('products.index');

//artist

Route::get('/artist/create','artistController@create' );

Route::post('/artists','artistController@store' )->name('artists.store');

Route::get('/artist/{artists}','artistController@show' )->name('artists.show');

Route::get('/artist/{artists}/edit','artistController@edit' )->name('artists.edit');

Route::put('/artist/{artists}','artistController@update' )->name('artists.update');

Route::delete('/artists/{artists}','artistController@destroy' )->name('artists.destroy');

Route::get('/artists/','artistController@index' )->name('artists.index');












//saman admin panel



Route::middleware(['auth','admin'])->group(function(){

//admin product

Route::get('/admin', function () 
{
    return view('admin.index');
});


Route::get('/a', function () 
{
    return view('categories.category');
});

Route::get('/bl', function () 
{
    return view('display.blog');
});

Route::get('/pst', function () 
{
    return view('display.post');
});


Route::get('/admin/product','adminproductController@index')->name('adminproduct.index');

Route::get('/admin/products/{products}','adminproductController@show')->name('adminproduct.show');

Route::delete('/admin/products/{products}','adminproductController@destroy')->name('adminproduct.destroy');




//admin add featured products

Route::get('/admin/product/featured','featuredproductController@index')->name('featuredproduct.index');

Route::get('/admin/product/featured/add	','featuredproductController@create')->name('featuredproduct.create');

Route::get('/admin/product/featured/edit{products} ','featuredproductController@edit')->name('featuredproduct.edit');

Route::post('/admin/product/featured/','featuredproductController@store')->name('featuredproduct.store');

Route::get('/admin/products/featured/{products}','featuredproductController@show')->name('featuredproduct.show');

Route::put('/admin/products/featured/{products}','featuredproductController@update')->name('featuredproduct.update');

Route::delete('/admin/products/featured/{products}','featuredproductController@destroy')->name('featuredproduct.destroy');

//admin artist

Route::get('/admin/artist','adminartistController@index')->name('adminartist.index');

Route::get('/admin/artist/{artists}','adminartistController@show')->name('adminartist.show');

Route::delete('/admin/artist/{artists}','adminartistController@destroy')->name('adminartist.destroy');

//training


Route::get('/training/create','trainerController@create' );

Route::post('/training','trainerController@store' )->name('training.store');

Route::get('/training/{training}','trainerController@show' )->name('training.show');

Route::get('/training/{training}/edit','trainerController@edit' )->name('training.edit');

Route::put('/training/{training}','trainerController@update' )->name('training.update');

Route::delete('/training/{training}','trainerController@destroy' )->name('training.destroy');

Route::get('/training/','trainerController@index' )->name('training.index');



Route::get('/admin/message',function () 
{
    return view('admin.message');
});

Route::get('/admin/productprofile',function () 
{
    return view('admin.productprofile');
});

Route::get('/admin/trainingprofile',function () 
{
    return view('admin.trainingprofile');
});





//
Route::get('/admin/feature',function () 
{
    return view('admin.featuredproduct');
});

});

//training


Route::get('/onetraining', function () 
{
    return view('training.training');
});

//contact and about us

Route::get('/contact', function () 
{
    return view('display.contact');
});

Route::get('/about', function () 
{
    return view('display.about');
});

//Route::get('/product', function () 
//{
  //  return view('categories.category');
//});


//Route::get('/product','approveController@index' )->name('approve.index');
//Route::get('/product/{products}','productController@show' )->name('products.show');
Route::get('/product','productController@lshow' )->name('products.lshow');

//Route::get('/product/display','productController@new' )->name('products.indexshow');

Route::get('/products/','productController@index' )->name('products.index');


//Route::get('/trainings', function () 
//{
    //return view('training.traininglist');
//});

Route::get('/trainings/','trainerController@index' )->name('trainings.index');
Route::get('/product/{products}','productController@show' )->name('products.show');
Route::get('/training/{training}','trainerController@show' )->name('training.show');
?>







