<?php

namespace Curunoir\ImageResizer;

use Illuminate\Support\ServiceProvider;
use Curunoir\ImageResizer\ImageResizer;

class ImageResizerServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('ImageResizer', function ($app) {
            return new ImageResizer();
        });
    }

}