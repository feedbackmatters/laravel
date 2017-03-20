<?php

namespace FeedbackMatters\Laravel;

use FeedbackMatters\Api\FeedbackMatters;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
  /**
   * Bootstrap the application events.
   *
   * @return void
   */
  public function boot()
  {
    //
  }

  /**
   * Register the service provider.
   *
   * @return void
   */
  public function register()
  {
    $config = [];

    if (is_array($this->app['config']['feedbackmatters'])) {
      $config = $this->app['config']['feedbackmatters'];
    }

    $this->app->bindIf(FeedbackMatters::class, function () use ($config) {
      return new FeedbackMatters(
        $config['email'],
        $config['password']
      );
    });
  }
}
