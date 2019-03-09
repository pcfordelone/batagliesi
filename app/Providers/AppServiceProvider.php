<?php

namespace FRD\Providers;

use FRD\Interfaces\AwardImageRepository;
use FRD\Interfaces\AwardRepository;
use FRD\Interfaces\AwardService;
use FRD\Interfaces\BlogCategoryRepository;
use FRD\Interfaces\BlogCategoryService;
use FRD\Interfaces\BlogPostImageRepository;
use FRD\Interfaces\BlogPostRepository;
use FRD\Interfaces\BlogPostService;
use FRD\Interfaces\HomeBannerRepository;
use FRD\Interfaces\HomeBannerService;
use FRD\Interfaces\ProjectCategoryRepository;
use FRD\Interfaces\ProjectCategoryService;
use FRD\Interfaces\ProjectImageRepository;
use FRD\Interfaces\ProjectRepository;
use FRD\Interfaces\ProjectService;
use FRD\Interfaces\ProjectTagRepository;
use FRD\Repositories\AwardImageRepositoryEloquent;
use FRD\Repositories\AwardRepositoryEloquent;
use FRD\Repositories\BlogCategoryRepositoryEloquent;
use FRD\Repositories\BlogPostImageRepositoryEloquent;
use FRD\Repositories\BlogPostRepositoryEloquent;
use FRD\Repositories\HomeBannerRepositoryEloquent;
use FRD\Repositories\ProjectCategoryRepositoryEloquent;
use FRD\Repositories\ProjectImageRepositoryEloquent;
use FRD\Repositories\ProjectRepositoryEloquent;
use FRD\Repositories\ProjectTagRepositoryEloquent;
use FRD\Services\AwardServiceAdm;
use FRD\Services\BlogCategoryServiceAdm;
use FRD\Services\BlogPostServiceAdm;
use FRD\Services\HomeBannerServiceAdm;
use FRD\Services\ProjectCategoryServiceAdm;
use FRD\Services\ProjectServiceAdm;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AwardRepository::class, AwardRepositoryEloquent::class);
        $this->app->bind(AwardImageRepository::class, AwardImageRepositoryEloquent::class);
        $this->app->bind(BlogCategoryRepository::class, BlogCategoryRepositoryEloquent::class);
        $this->app->bind(BlogPostRepository::class, BlogPostRepositoryEloquent::class);
        $this->app->bind(BlogPostImageRepository::class, BlogPostImageRepositoryEloquent::class);
        $this->app->bind(HomeBannerRepository::class, HomeBannerRepositoryEloquent::class);
        $this->app->bind(ProjectRepository::class, ProjectRepositoryEloquent::class);
        $this->app->bind(ProjectCategoryRepository::class, ProjectCategoryRepositoryEloquent::class);
        $this->app->bind(ProjectImageRepository::class, ProjectImageRepositoryEloquent::class);
        $this->app->bind(ProjectTagRepository::class, ProjectTagRepositoryEloquent::class);

        $this->app->bind(AwardService::class, AwardServiceAdm::class);
        $this->app->bind(BlogCategoryService::class, BlogCategoryServiceAdm::class);
        $this->app->bind(BlogPostService::class, BlogPostServiceAdm::class);
        $this->app->bind(HomeBannerService::class, HomeBannerServiceAdm::class);
        $this->app->bind(ProjectService::class, ProjectServiceAdm::class);
        $this->app->bind(ProjectCategoryService::class, ProjectCategoryServiceAdm::class);
    }
}
