<?php


/* Auth --------------------------------------------------------------------------------- */
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);

/* Admin -------------------------------------------------------------------------------- */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    Route::get('', ['as' => 'admin.index', 'uses' => 'Admin\MainController@index']);

    /* Awards --------------------------------------------------------------------------------------------------------------------- */
    Route::group(['prefix' => 'awards'], function() {
        Route::get('', ['as' => 'admin.awards.index', 'uses' => 'Admin\AwardController@index']);
        Route::get('detail/{id}', ['as' => 'admin.awards.detail', 'uses' => 'Admin\AwardController@show']);
        Route::get('create', ['as' => 'admin.awards.create', 'uses' => 'Admin\AwardController@create']);
        Route::post('create', ['as' => 'admin.awards.store', 'uses' => 'Admin\AwardController@store']);
        Route::get('edit/{id}', ['as' => 'admin.awards.edit', 'uses' => 'Admin\AwardController@edit']);
        Route::put('edit/{id}', ['as' => 'admin.awards.update', 'uses' => 'Admin\AwardController@update']);
        Route::get('delete/{id}', ['as' => 'admin.awards.delete', 'uses' => 'Admin\AwardController@destroy']);
        Route::get('rm_photos/{id}', ['as' => 'admin.awards.rm_photos', 'uses' => 'Admin\AwardController@rm_photos']);
        Route::get('change_status', ['as' => 'admin.awards.change_status', 'uses' => 'Admin\AwardController@changeStatus']);
    });

    /* Banner --------------------------------------------------------------------------------------------------------------------- */
    Route::group(['prefix' => 'home_banner'], function() {
        Route::get('', ['as' => 'admin.home_banners.index', 'uses' => 'Admin\HomeBannerController@index']);
        Route::get('detail/{id}', ['as' => 'admin.home_banners.detail', 'uses' => 'Admin\HomeBannerController@show']);
        Route::get('create', ['as' => 'admin.home_banners.create', 'uses' => 'Admin\HomeBannerController@create']);
        Route::post('create', ['as' => 'admin.home_banners.store', 'uses' => 'Admin\HomeBannerController@store']);
        Route::get('edit/{id}', ['as' => 'admin.home_banners.edit', 'uses' => 'Admin\HomeBannerController@edit']);
        Route::put('edit/{id}', ['as' => 'admin.home_banners.update', 'uses' => 'Admin\HomeBannerController@update']);
        Route::get('delete/{id}', ['as' => 'admin.home_banners.delete', 'uses' => 'Admin\HomeBannerController@destroy']);
        Route::get('rm_photos/{id}', ['as' => 'admin.home_banners.rm_photos', 'uses' => 'Admin\HomeBannerController@rm_photos']);
        Route::get('change_status', ['as' => 'admin.home_banners.change_status', 'uses' => 'Admin\HomeBannerController@changeStatus']);
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

    /* Projects ----------------------------------------------------------------------------------------------------------------------- */
    Route::group(['prefix' => 'projects'], function() {
        Route::get('', ['as' => 'admin.projects.index', 'uses' => 'Admin\ProjectController@index']);
        Route::get('detail/{id}', ['as' => 'admin.projects.detail', 'uses' => 'Admin\ProjectController@show']);
        Route::get('create', ['as' => 'admin.projects.create', 'uses' => 'Admin\ProjectController@create']);
        Route::post('create', ['as' => 'admin.projects.store', 'uses' => 'Admin\ProjectController@store']);
        Route::get('edit/{id}', ['as' => 'admin.projects.edit', 'uses' => 'Admin\ProjectController@edit']);
        Route::put('edit/{id}', ['as' => 'admin.projects.update', 'uses' => 'Admin\ProjectController@update']);
        Route::get('delete/{id}', ['as' => 'admin.projects.delete', 'uses' => 'Admin\ProjectController@destroy']);
        Route::get('rm_photos/{id}', ['as' => 'admin.projects.rm_photos', 'uses' => 'Admin\ProjectController@rm_photos']);
        Route::get('change_status', ['as' => 'admin.projects.change_status', 'uses' => 'Admin\ProjectController@changeStatus']);
        Route::get('rm_photo/{post_id}/{photo_id}', ['as' => 'admin.projects.rm_photo', 'uses' => 'Admin\ProjectController@rm_photo']);

        Route::group(['prefix' => 'categorias'], function() {
            Route::get('', ['as' => 'admin.projects.categories.index', 'uses' => 'Admin\ProjectCategoryController@index']);
            Route::get('create', ['as' => 'admin.projects.categories.create', 'uses' => 'Admin\ProjectCategoryController@create']);
            Route::post('create', ['as' => 'admin.projects.categories.store', 'uses' => 'Admin\ProjectCategoryController@store']);
            Route::get('edit/{id}', ['as' => 'admin.projects.categories.edit', 'uses' => 'Admin\ProjectCategoryController@edit']);
            Route::put('edit/{id}', ['as' => 'admin.projects.categories.update', 'uses' => 'Admin\ProjectCategoryController@update']);
            Route::get('delete/{id}', ['as' => 'admin.projects.categories.delete', 'uses' => 'Admin\ProjectCategoryController@destroy']);
            Route::get('change_status', ['as' => 'admin.projects.categories.change_status', 'uses' => 'Admin\ProjectCategoryController@changeStatus']);
        });
    });

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

});

/* Site --------------------------------------------------------------------------------- */
Route::get('', ['as' => 'site.index', 'uses' => 'Site\MainController@index']);