<?php

namespace App\Providers;

use App\Interfaces\MemberInterface;
use App\Repository\MemberRepository;

use App\Interfaces\TestNumberInterface;
use App\Repository\TestNumberRepository;

use App\Interfaces\TestStringInterface;
use App\Repository\TestStringRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TestStringInterface::class, TestStringRepository::class);
        $this->app->bind(TestNumberInterface::class, TestNumberRepository::class);
        $this->app->bind(MemberInterface::class, MemberRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
