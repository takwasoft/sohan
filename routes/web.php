<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','ShotovaghController@index')->name('/');
Route::get('/404','ShotovaghController@error')->name('/error');
Route::get('/about','ShotovaghController@about')->name('about');
Route::get('/contact','ShotovaghController@contact')->name('contact');
Route::get('/faq','ShotovaghController@faq')->name('faq');

//customer section
Route::get('/customer-login','CustomerController@customer_login')->name('customer_login');
Route::get('/customer-registration','CustomerController@customer_registration')->name('customer_registration');
Route::get('/customer-account','CustomerController@customer_account')->name('customer_account');
Route::get('/customer-order','CustomerController@customer_order')->name('customer_order');
Route::get('/customer-wishlist','CustomerController@customer_wishlist')->name('customer_wishlist');
Route::get('/basket','CustomerController@basket')->name('basket');


Route::get('/checkout1','CheckoutController@checkout1')->name('checkout1');
Route::get('/checkout2','CheckoutController@checkout2')->name('checkout2');
Route::get('/checkout3','CheckoutController@checkout3')->name('checkout3');
Route::get('/checkout4','CheckoutController@checkout4')->name('checkout4');


//product section

Route::get('/create-product',function (){
    return view('front-end.product.create_product');
})->name('create_product');

Route::get('/create-product2',function (){
    return view('front-end.product.create_product2');
})->name('create_product2');

Route::get('/product-details',function (){
    return view('front-end.product.product_details');
})->name('product_details');



//Admin
Route::get('/admin',function (){
    return view('admin.home.home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('/suppliers', 'SupplierController');                                               
                                                                                           
                                               
Route::resource('/categories', 'CategoryController');                                               
                                               
Route::resource('/subcategories', 'SubCategoryController');                                               
                                               
Route::resource('/brands', 'BrandController');                                               
                                               
Route::resource('/suppliers', 'SupplierController');                                               
                                               
Route::resource('/products', 'ProductController');                                               
                                               
Route::resource('/areas', 'AreaController');                                               
                                               
Route::resource('/subDistricts', 'SubDistrictController');                                               
                                               
Route::resource('/districts', 'DistrictController');                                               
                                               
Route::resource('/divisions', 'DivisionController');                                               
                                               
Route::resource('/paymentMethods', 'PaymentMethodController');                                               
                                               
Route::resource('/productPaymentMethods', 'ProductPaymentMethodController');                                               
                                               
                                               
                                               
Route::resource('/productImages', 'ProductImageController');                                               
                                               
Route::resource('/orders', 'OrderController');                                               
                                               
Route::resource('/orderLines', 'OrderLineController');                                               
                                               
Route::resource('/orderPaymentMehods', 'OrderPaymentMehodController');                                               
                                               
Route::resource('/supplierCategorys', 'SupplierCategoryController');                                               
                                               
Route::resource('/sizes', 'SizeController');                                               
                                               
Route::resource('/sizeProducts', 'SizeProductController');                                               
                                               
Route::resource('/colors', 'ColorController');                                               
                                               
Route::resource('/colorProducts', 'ColorProductController');                                               
                                               
Route::resource('/offers', 'OfferController');                                               
                                               
Route::resource('/offerProducts', 'OfferProductController');                                               
                                               
Route::resource('/sliders', 'SliderController');                                               
                                               
Route::resource('/ads', 'AdController');                                               
                                               
Route::resource('/boosts', 'BoostController');                                               
                                               
Route::resource('/themes', 'ThemeController');                                               
                                               
Route::resource('/buyers', 'BuyerController');                                               
                                               
Route::resource('/productreviews', 'ProductReviewController');                                               
                                               
Route::resource('/supplierreviews', 'SupplierReviewController');                                               
                                               
Route::resource('/supplierchats', 'SupplierChatController');                                               
                                               
Route::resource('/supplierfollows', 'SupplierFollowController');                                               
                                               
Route::resource('/tags', 'TagController');                                               
                                               
Route::resource('/productTags', 'ProductTagController');                                               
                                               
Route::resource('/parentcategories', 'ParentCategoryController');                                               
                                               