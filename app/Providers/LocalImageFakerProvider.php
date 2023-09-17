<?php

// app/Providers/LocalImageFakerProvider.php

namespace App\Providers;

use Faker\Provider\Base;

class LocalImageFakerProvider extends Base
{
    /**
     * Generate a fake image URL from local storage.
     *
     * @param string $directory
     * @param int $width
     * @param int $height
     * @return string
     */

    public function localImageUrl($directory, $width = 640, $height = 480)
    {
        $faker = \Faker\Factory::create();
        $filename = $faker->image(storage_path("app/public/{$directory}"), $width, $height, 'cats', false);
        return asset("storage/{$directory}/{$filename}");
    }
}
