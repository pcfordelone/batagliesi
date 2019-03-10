<?php

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);

/* Admin -------------------------------------------------------------------------------- */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('', ['as' => 'admin.index', 'uses' => 'Admin\MainController@index']);

    /* Users ----------------------------------------------------------------------------------------------------------------------- */
    Route::group(['prefix' => 'usuarios'], function() {
        Route::get('', ['as' => 'admin.users.index', 'uses' => 'Admin\UserController@index']);
        Route::get('/create', ['as' => 'admin.users.create', 'uses' => 'Admin\UserController@create']);
        Route::post('/create', ['as' => 'admin.users.store', 'uses' => 'Admin\UserController@store']);
        Route::get('/edit/{id}', ['as' => 'admin.users.edit', 'uses' => 'Admin\UserController@edit']);
        Route::put('/edit/{id}', ['as' => 'admin.users.update', 'uses' => 'Admin\UserController@update']);
        Route::get('/change-password', ['as' => 'admin.users.change_password', 'uses' => 'Admin\UserController@change_password']);
        Route::put('/change-password', ['as' => 'admin.users.update_password', 'uses' => 'Admin\UserController@update_password']);
        Route::get('/delete/{id}', ['as' => 'admin.users.delete', 'uses' => 'Admin\UserController@destroy']);

        Route::group(['prefix' => 'perfil'], function() {
            Route::get('/', ['as' => 'admin.users.profiles.index', 'uses' => 'Admin\UserProfileController@index']);
            Route::get('/create', ['as' => 'admin.users.profiles.create', 'uses' => 'Admin\UserProfileController@create']);
            Route::post('/create', ['as' => 'admin.users.profiles.store', 'uses' => 'Admin\UserProfileController@store']);
            Route::get('/edit', ['as' => 'admin.users.profiles.edit', 'uses' => 'Admin\UserProfileController@edit']);
            Route::put('/edit', ['as' => 'admin.users.profiles.update', 'uses' => 'Admin\UserProfileController@update']);
        });
    });

    /* Blog ----------------------------------------------------------------------------------------------------------------------- */
    Route::group(['prefix' => 'blog'], function() {
        Route::get('', ['as' => 'admin.blog.posts.index', 'uses' => 'Admin\BlogPostController@index']);
        Route::get('detail/{id}', ['as' => 'admin.blog.posts.detail', 'uses' => 'Admin\BlogPostController@show']);
        Route::get('create', ['as' => 'admin.blog.posts.create', 'uses' => 'Admin\BlogPostController@create']);
        Route::post('create', ['as' => 'admin.blog.posts.store', 'uses' => 'Admin\BlogPostController@store']);
        Route::get('edit/{id}', ['as' => 'admin.blog.posts.edit', 'uses' => 'Admin\BlogPostController@edit']);
        Route::put('edit/{id}', ['as' => 'admin.blog.posts.update', 'uses' => 'Admin\BlogPostController@update']);
        Route::get('delete/{id}', ['as' => 'admin.blog.posts.delete', 'uses' => 'Admin\BlogPostController@destroy']);
        Route::get('rm_photos/{id}', ['as' => 'admin.blog.posts.rm_photos', 'uses' => 'Admin\BlogPostController@rm_photos']);
        Route::get('change_status', ['as' => 'admin.blog.posts.change_status', 'uses' => 'Admin\BlogPostController@changeStatus']);
        Route::get('rm_photo/{post_id}/{photo_id}', ['as' => 'admin.blog.posts.rm_photo', 'uses' => 'Admin\BlogPostController@rm_photo']);

        Route::group(['prefix' => 'categorias'], function() {
            Route::get('', ['as' => 'admin.blog.categories.index', 'uses' => 'Admin\BlogCategoryController@index']);
            Route::get('create', ['as' => 'admin.blog.categories.create', 'uses' => 'Admin\BlogCategoryController@create']);
            Route::post('create', ['as' => 'admin.blog.categories.store', 'uses' => 'Admin\BlogCategoryController@store']);
            Route::get('edit/{id}', ['as' => 'admin.blog.categories.edit', 'uses' => 'Admin\BlogCategoryController@edit']);
            Route::put('edit/{id}', ['as' => 'admin.blog.categories.update', 'uses' => 'Admin\BlogCategoryController@update']);
            Route::get('delete/{id}', ['as' => 'admin.blog.categories.delete', 'uses' => 'Admin\BlogCategoryController@destroy']);
            Route::get('change_status', ['as' => 'admin.blog.categories.change_status', 'uses' => 'Admin\BlogCategoryController@changeStatus']);
        });
    });

});
