<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/suppliers', 'SupplierController');                                               
                                                                                           
                                               
Route::resource('/Categorys', 'CategoryController');                                               
                                               
Route::resource('/SubCategorys', 'SubCategoryController');                                               
                                               
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
                                               


