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


    public function __construct($source, $destination)
    {
        $this->source       = $source;
        $this->destination  = $destination;

        // create an image manager instance with favored driver
        $this->manager = new ImageManager(array('driver' => 'gd'));
    }

    public function widen($width)
    {
         $img = Image::make($this->source);
         $img->widen($width, function ($constraint) {
            $constraint->upsize();
         });
        $img->save($this->destination);
    }
}