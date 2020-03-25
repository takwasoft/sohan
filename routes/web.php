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
                                                                                           
                                               
Route::resource('/Categories', 'CategoryController');                                               
                                               
Route::resource('/SubCategories', 'SubCategoryController');                                               
                                               
Route::resource('/Brands', 'BrandController');                                               
                                               
Route::resource('/Suppliers', 'SupplierController');                                               
                                               
Route::resource('/Products', 'ProductController');                                               
                                               
Route::resource('/Areas', 'AreaController');                                               
                                               
Route::resource('/SubDistricts', 'SubDistrictController');                                               
                                               
Route::resource('/Districts', 'DistrictController');                                               
                                               
Route::resource('/Divisions', 'DivisionController');                                               
                                               
Route::resource('/PaymentMethods', 'PaymentMethodController');                                               
                                               
Route::resource('/ProductPaymentMethods', 'ProductPaymentMethodController');                                               
                                               
                                               
                                               
Route::resource('/ProductImages', 'ProductImageController');                                               
                                               
Route::resource('/Orders', 'OrderController');                                               
                                               
Route::resource('/OrderLines', 'OrderLineController');                                               
                                               
Route::resource('/OrderPaymentMehods', 'OrderPaymentMehodController');                                               
                                               
Route::resource('/SupplierCategorys', 'SupplierCategoryController');                                               
                                               
Route::resource('/Sizes', 'SizeController');                                               
                                               
Route::resource('/SizeProducts', 'SizeProductController');                                               
                                               
Route::resource('/Colors', 'ColorController');                                               
                                               
Route::resource('/ColorProducts', 'ColorProductController');                                               
                                               
Route::resource('/Offers', 'OfferController');                                               
                                               
Route::resource('/OfferProducts', 'OfferProductController');                                               
                                               
Route::resource('/Sliders', 'SliderController');                                               
                                               
Route::resource('/Ads', 'AdController');                                               
                                               
Route::resource('/Boosts', 'BoostController');                                               
                                               
Route::resource('/Themes', 'ThemeController');                                               
                                               
Route::resource('/Buyers', 'BuyerController');                                               
                                               
Route::resource('/ProductReviews', 'ProductReviewController');                                               
                                               
Route::resource('/SupplierReviews', 'SupplierReviewController');                                               
                                               
Route::resource('/SupplierChats', 'SupplierChatController');                                               
                                               
Route::resource('/SupplierFollows', 'SupplierFollowController');                                               
                                               
Route::resource('/Tags', 'TagController');                                               
                                               
Route::resource('/ProductTags', 'ProductTagController');                                               
                                               




