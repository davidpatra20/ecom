<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes || Seeting From Provider\RouteService.php ||
|--------------------------------------------------------------------------
|
|
*/
Route::group(['prefix' => 'admin', 'middleware' => ['is_admin']], function(){
	//Dashboard
	Route::get('dashboard','Admin\DashboardController@index' )->name('admin.dashboard');
	//Category
	Route::get('category','Admin\CategoryController@index' )->name('admin.category');
	Route::get('add-category','Admin\CategoryController@addCat' )->name('admin.add-category');

	//Product
	Route::get('product','Admin\ProductController@index' )->name('admin.product');
	Route::get('add-product','Admin\ProductController@addProduct' )->name('admin.add-product');

	//Blog
	Route::get('blog','Admin\BlogController@index' )->name('admin.blog');
	Route::get('add-blog','Admin\BlogController@addBlog' )->name('admin.add-blog');

	//Newslatter
	Route::get('newslatter','Admin\NewslatterController@index' )->name('admin.newslatter');
	Route::get('send-newslatter','Admin\NewslatterController@sendNews' )->name('admin.send-newslatter');

	//Blog
	Route::get('role','Admin\RoleController@index' )->name('admin.role');
	Route::get('add-role','Admin\RoleController@addrole' )->name('admin.add-role');

	//Profile
	Route::get('profile','Admin\ProfileController@profile' )->name('admin.profile');
	Route::get('password','Admin\ProfileController@password' )->name('admin.password');

	//Slider
	Route::get('slider','Admin\SliderController@index' )->name('admin.slider');
	Route::get('add-slider','Admin\SliderController@addSlider' )->name('admin.add-slider');

	//About
	//Service

	//Image Gallery
	Route::get('image','Admin\ImageController@index' )->name('admin.image');
	Route::get('add-image','Admin\ImageController@addImage' )->name('admin.add-image');

	//Video Gallery
	Route::get('video','Admin\VideoController@index' )->name('admin.video');
	Route::get('add-video','Admin\VideoController@addVideo' )->name('admin.add-video');

	//Social
	Route::get('team','Admin\TeamController@index' )->name('admin.team');
	Route::get('add-team','Admin\TeamController@addTeam' )->name('admin.add-team');

	//Team
	Route::get('social','Admin\SocialController@index' )->name('admin.social');
	Route::get('add-social','Admin\SocialController@addSocial' )->name('admin.add-social');

	//Testimonial
	Route::get('testimonial','Admin\TestimonialController@index' )->name('admin.testimonial');
	Route::get('add-testimonial','Admin\TestimonialController@addtesTimonial' )->name('admin.add-testimonial');

	//Contact
	Route::get('contact','Admin\ContactController@index' )->name('admin.contact');
	
	//Menu
	//Page

        
});