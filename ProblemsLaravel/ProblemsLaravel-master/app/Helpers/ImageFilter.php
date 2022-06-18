<?php


namespace App\Helpers;

use Intervention\Image\Filters\FilterInterface;

// use Intervention\Image\Facades\Image as Image;
use Intervention\Image\Image;

class ImageFilter implements FilterInterface
{
	// create a function 
	public function applyFilter(Image $image){
		return $image->fit(1024)->crop(100, 100, 25, 25)->blur(10)->save('cache.jpg',10);
	}
}
 