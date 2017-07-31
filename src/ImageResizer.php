<?php
/**
 * Created by PhpStorm.
 * User: curu
 * Date: 31/07/2017
 * Time: 21:33
 */

namespace curunoir\ImageResizer;

use Intervention\Image\ImageManager;

class ImageResizer
{
    private $source;
    private $destination;
    private $width;
    private $height;

    private $manager;


    public function __construct()
    {
        // create an image manager instance with favored driver
        $this->manager = new ImageManager(array('driver' => 'gd'));
    }

    public function widen($source, $destination, $width)
    {
         $img = Image::make($source);
         $img->widen($width, function ($constraint) {
            $constraint->upsize();
         });
        $img->save($destination);
    }
}