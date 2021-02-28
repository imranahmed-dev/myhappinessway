<?php

use Illuminate\Support\Facades\Route;

Route::get('clear', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('storage:link');
    return 'DONE'; //Return anything
});



Route::get('/','frontend\FrontendController@index')->name('frontend');

Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');


/*app id 384337159226038 
secret key ee57b41f71341ecdbd34a653df32c2c6*/

Route::get('/about', 'frontend\FrontendController@about')->name('about');
Route::get('/category/{slug}', 'frontend\FrontendController@category')->name('category');

Route::get('/tag/{slug}', 'frontend\FrontendController@tag')->name('tag');

Route::get('/contact', 'frontend\FrontendController@contact')->name('contact');
Route::get('/privacy-policy', 'frontend\FrontendController@privacy')->name('privacy-policy');
Route::get('/terms-conditions', 'frontend\FrontendController@termconditions')->name('terms-conditions');
Route::get('/post/{slug}', 'frontend\FrontendController@post')->name('single.post');
Route::get('/all/category', 'frontend\FrontendController@allcategory')->name('all.category');
Route::get('/user/signin', 'frontend\FrontendController@login_view')->name('signin.view');

Route::get('/user/signup', 'frontend\FrontendController@registration_view')->name('signup.view');

Route::get('/user/profile/{id}', 'frontend\FrontendController@user_profile')->name('user.profile');

Route::post('/user/signup/store', 'frontend\LoginRegistrationController@signup_store')->name('signup.store');

Route::post('/contact/store', 'frontend\ContactController@store')->name('contact.store');



//Myacount
Route::group(['middleware' => ['auth', 'user']],function(){
    
Route::prefix('myaccount')->group(function(){
    
    
    Route::get('/dashboard', 'frontend\DashboardController@index')->name('dashboard.view');
    
    Route::get('write/post', 'frontend\DashboardController@write_post')->name('write.post');
    
    Route::get('post/list', 'frontend\DashboardController@post_list')->name('post.list');
    
    Route::get('profile', 'frontend\DashboardController@profile_view')->name('profile.view');
    
    Route::post('post/store', 'frontend\PostController@store')->name('post.store');
    
    Route::get('post/show/{slug}', 'frontend\PostController@show')->name('post.show');
    
    Route::get('post/edit/{slug}', 'frontend\PostController@edit')->name('post.edit');
    
    Route::get('post/delete/{id}', 'frontend\PostController@destroy')->name('post.delete');
    
    Route::post('post/update/{id}', 'frontend\PostController@update')->name('post.update');
    
    Route::post('user/update/{id}','frontend\DashboardController@profileUpdate')->name('profile.update');
    
    Route::post('user/password/','frontend\DashboardController@passwordUpdate')->name('profile.password'); 
    
});
    
});


    Route::post('commnet/store', 'frontend\CommentController@store')->name('comment.store');
    Route::post('subscribe/store', 'frontend\SubscribeController@store')->name('subscribe.store');


Auth::routes();


//////////////////Backend Routes

Route::group(['middleware' => ['auth', 'admin']], function(){
Route::get('/home', 'HomeController@index')->name('home');
    
//Users
Route::prefix('dashboard/users')->group(function(){
    Route::get('/view', 'backend\UsersController@view')->name('users.view');
    Route::get('/add', 'backend\UsersController@add')->name('users.add');
    Route::post('/stor', 'backend\UsersController@stor')->name('users.stor');
    Route::get('/edit/{id}', 'backend\UsersController@edit')->name('users.edit');
    Route::post('/update/{id}', 'backend\UsersController@update')->name('users.update');
    Route::get('/delete/{id}', 'backend\UsersController@delete')->name('users.delete');
});
//Profiles
Route::prefix('dashboard/profiles')->group(function(){
    Route::get('/view', 'backend\ProfileController@view')->name('profiles.view');
    Route::get('/edit', 'backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/update', 'backend\ProfileController@update')->name('profiles.update');
    Route::get('/password/change', 'backend\ProfileController@passwordEdit')->name('profiles.edit.password');
    Route::post('/password/update', 'backend\ProfileController@passwordUpdate')->name('profiles.update.password');
});
    
//Categories
Route::prefix('dashboard/categories')->group(function(){
    Route::get('/view', 'backend\CategoryController@view')->name('categories.view');
    Route::get('/add', 'backend\CategoryController@add')->name('categories.add');
    Route::post('/store', 'backend\CategoryController@store')->name('categories.store');
    Route::get('/edit/{id}', 'backend\CategoryController@edit')->name('categories.edit');
    Route::post('/update/{id}', 'backend\CategoryController@update')->name('categories.update');
    Route::get('/delete/{id}', 'backend\CategoryController@delete')->name('categories.delete');
});
    
//Tags
Route::prefix('dashboard/tags')->group(function(){
    Route::get('/view', 'backend\TagController@view')->name('tags.view');
    Route::get('/add', 'backend\TagController@add')->name('tags.add');
    Route::post('/store', 'backend\TagController@store')->name('tags.store');
    Route::get('/edit/{id}', 'backend\TagController@edit')->name('tags.edit');
    Route::post('/update/{id}', 'backend\TagController@update')->name('tags.update');
    Route::get('/delete/{id}', 'backend\TagController@delete')->name('tags.delete');
});

//Admin Posts
Route::prefix('dashboard/admin/posts')->group(function(){
    Route::get('/view', 'backend\PostController@view')->name('posts.view');
    Route::get('/add', 'backend\PostController@add')->name('posts.add');
    Route::post('/store', 'backend\PostController@store')->name('posts.store');
    Route::get('/edit/{id}', 'backend\PostController@edit')->name('posts.edit');
    Route::post('/update/{id}', 'backend\PostController@update')->name('posts.update');
    Route::get('/delete/{id}', 'backend\PostController@delete')->name('posts.delete');
    Route::get('/show/{id}', 'backend\PostController@show')->name('posts.show');

});

    
//User Posts
Route::prefix('dashboard/user/posts')->group(function(){
    Route::get('/view', 'backend\PostController@userPost_view')->name('user.posts.view');
    
    Route::get('/delete/{id}', 'backend\PostController@userPost_delete')->name('user.posts.delete');
    
    Route::get('/show/{id}', 'backend\PostController@userPostshow')->name('user.posts.show');
    
    Route::get('/approved/{id}', 'backend\PostController@postApproved')->name('posts.approved');
    
    Route::get('/regected/{id}', 'backend\PostController@postRegected')->name('posts.regected');
    
    Route::get('/delete/{id}', 'backend\PostController@userPost_delete')->name('user.posts.delete');
    
    Route::get('/request', 'backend\PostController@requested_post')->name('requ.posts.view');
    
    Route::get('/request/show/{id}', 'backend\PostController@requ_post_show')->name('requ.posts.show');
    
    Route::get('/request/delete/{id}', 'backend\PostController@requ_post_delete')->name('requ.posts.delete');
    
    Route::get('/deleted', 'backend\PostController@deleted_post')->name('deleted.post.view');
    
    Route::get('/deleted/show/{id}', 'backend\PostController@deleted_post_show')->name('deleted.post.show');
    
    Route::get('/deleted/user/{id}', 'backend\PostController@deleted_post_user')->name('deleted.post.user');
    
    Route::get('/restore/{id}', 'backend\PostController@deleted_post_restore')->name('deleted.posts.restore');

});
    
    

//Settings
Route::prefix('dashboard/settings')->group(function(){
    Route::get('/view', 'frontend\SettingController@index')->name('settings.index');
    
    Route::post('/update/', 'frontend\SettingController@update')->name('settings.update');
});
    
    
//Contact message
Route::get('dashboard/contact/view', 'backend\SettingController@index')->name('contact.index');
Route::get('dashboard/contact/show/{id}', 'backend\SettingController@show')->name('contact.show');
    
//Comments
Route::get('dashboard/comment/view', 'backend\SettingController@comment_index')->name('comment.index');
Route::get('dashboard/comment/show/{id}', 'backend\SettingController@comment_show')->name('comment.show');
Route::get('dashboard/comment/approved/{id}', 'backend\SettingController@CommentApproved')->name('comment.approved'); 
Route::get('dashboard/comment/regected/{id}', 'backend\SettingController@CommentRegected')->name('comment.regected');

//Subscribe
Route::get('dashboard/subscribe/view', 'backend\SettingController@subscribe_index')->name('subscribe.index'); 
    
//Social Media management
Route::prefix('admin/')->group(function(){
   

    Route::get('/media','backend\SocialMediaController@index')->name('social.index'); 
    Route::get('/media/create','backend\SocialMediaController@create')->name('social.add');
    Route::post('/media/store','backend\SocialMediaController@store')->name('social.store');
    Route::get('/media/edit/{id}','backend\SocialMediaController@edit')->name('social.edit');
    Route::post('/media/update/{id}','backend\SocialMediaController@update')->name('social.update');
    Route::get('/media/delete/{id}','backend\SocialMediaController@destroy')->name('social.delete');

});
    
//Gallery  
Route::group(['as'=>'gallery.','prefix'=>'dashboard/gallery','namespace'=>'backend'], function(){
    Route::get('/view','GalleryController@index')->name('view');
    Route::get('/create','GalleryController@create')->name('create');
    Route::post('/store','GalleryController@store')->name('store');
    Route::get('/edit/{id}','GalleryController@edit')->name('edit');
    Route::post('/update/{id}','GalleryController@update')->name('update');
    Route::get('/delete/{id}','GalleryController@destroy')->name('delete');
});

//Author
Route::group(['as'=>'self.author.','prefix'=>'dashboard/self/author','namespace'=>'backend'], function(){

    Route::post('/update','SettingController@self_author_update')->name('update');
    Route::get('view','SettingController@self_author_view')->name('view'); 

});
    //Terms Condition 
Route::group(['as'=>'terms.','prefix'=>'dashboard/terms-condition','namespace'=>'backend'], function(){

    Route::get('view','SettingController@terms_condition')->name('view'); 
    Route::post('/update','SettingController@terms_condition_update')->name('update');

});
    
//Privacy Policy  
Route::group(['as'=>'privacy.','prefix'=>'dashboard/privacy-policy','namespace'=>'backend'], function(){

    Route::get('view','SettingController@privacy_policy')->name('view'); 
    Route::post('/update','SettingController@privacy_policy_update')->name('update');

});

    


});
