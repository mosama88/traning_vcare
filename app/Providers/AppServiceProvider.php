<?php

namespace App\Providers;

use App\Faker\SpecialityProvider;
use App\Faker\DoctorTitleProvider;
use App\Faker\ServiceProviderFaker;
use Illuminate\Support\ServiceProvider;
use App\Repositories\SpecialityRepository;
use App\Repositories\Interfaces\SpecialityRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    app()->bind(SpecialityRepositoryInterface::class, SpecialityRepository::class);
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    fake()->addProvider(new DoctorTitleProvider(fake()));
    fake()->addProvider(new SpecialityProvider(fake()));
    fake()->addProvider(new ServiceProviderFaker(fake()));
  }
}