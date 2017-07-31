<?php
/**
 * Created by PhpStorm.
 * User: curu
 * Date: 31/07/2017
 * Time: 21:34
 */
namespace curunoir\ImageResizer;
/**
 * Created by PhpStorm.
 * User: dlouvard_imac
 * Date: 06/01/2017
 * Time: 22:28
 */
use Illuminate\Support\ServiceProvider;
//use Illuminate\Foundation\AliasLoader;

class ImageResizerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //AliasLoader::getInstance()->alias('BootForm',BootForm::class);
    }

    public function register()
    {
        $this->app->bind('ImageResizer', function ($app) {
            return new ImageResizer();
        });
    }

    public function provides()
    {
        return ['ImageResizer'];
    }
}