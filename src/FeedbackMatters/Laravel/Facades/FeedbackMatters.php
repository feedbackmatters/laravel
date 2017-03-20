<?php

namespace FeedbackMatters\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class FeedbackMatters extends Facade
{
  /**
   * {@inheritDoc}
   */
  protected static function getFacadeAccessor()
  {
    return 'FeedbackMatters';
  }
}
