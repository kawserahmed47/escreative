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

// Route::get('/', function () {
//     return view('frontend.pages.index');
// });


Route::get('/checkout',function(){
    return view('checkout');
});


Route::get('/','FrontController@index')->name('index');

Route::get('/about-us','FrontController@about')->name('about');

Route::get('/profile','FrontController@profile')->name('profile');

Route::get('/ceo-message','FrontController@ceoMessage')->name('ceoMessage');

Route::get('/mission','FrontController@mission')->name('mission');

Route::get('/vision','FrontController@vision')->name('vision');

Route::get('/history','FrontController@history')->name('history');

Route::get('/es-gallery','FrontController@gallery')->name('esGallery');

Route::get('/team','FrontController@team')->name('team');

Route::get('/es-faq','FrontController@faq')->name('esFaq');

Route::get('/services','FrontController@services')->name('services');

Route::get('/service-details','FrontController@serviceDetails')->name('serviceDetails');

Route::get('/products','FrontController@products')->name('products');

Route::get('/product-details','FrontController@productDetails')->name('productDetails');

Route::get('/projects','FrontController@projects')->name('projects');

Route::get('/project-details','FrontController@projectDetails')->name('projectDetails');

Route::get('/all-news','FrontController@news')->name('newsView');

Route::get('/news-details','FrontController@newsDetails')->name('newsDetails');

Route::get('es-contact', 'FrontController@contact')->name('esContact');

Route::get('/sendMail', 'MailController@sendMail');
Route::post('/change-role','AdminController@changeRole')->name('changeRole');
Route::post('/change-quotation-status', 'QuotationController@changeQuotationStatus')->name('changeQuotationStatus');
Route::post('/change-contact-status', 'ContactController@changeContactStatus')->name('changeContactStatus');

Route::resource('invoice', 'InvoiceController');

// Dashboard

Route::resource('/slider','SliderController');
Route::get('/slider-delete/{id}', 'SliderController@destroy')->name('sliderDelete');
Route::resource('/quotation', 'QuotationController');
Route::resource('/contact', 'ContactController');
Route::resource('/service','ServiceController');
Route::resource('/project','ProjectController');
Route::resource('/news', 'BlogController');
Route::resource('/about', 'AboutController');
Route::resource('/testimonial', 'TestimonialController');
Route::resource('/faq', 'FaqController');
Route::resource('/gallery', 'GalleryController');

// Admin
Route::resource('admin', 'AdminController');
// Route::resource('login', 'LoginController');
Auth::routes();
Route::get('/dashboard','DashboardController@index')->name('dashboard')->middleware('admin');
Route::get('/home', 'HomeController@index')->name('home');
