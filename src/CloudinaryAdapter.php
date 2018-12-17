<?php

namespace Madmatt\Cloudinary;

use Enl\Flysystem\Cloudinary\CloudinaryAdapter as EnlCloudinaryAdapter;
use SilverStripe\Assets\Flysystem\ProtectedAdapter;
use SilverStripe\Assets\Flysystem\PublicAdapter;

class CloudinaryAdapter extends EnlCloudinaryAdapter implements PublicAdapter, ProtectedAdapter
{
    /**
     * Provide downloadable url that is open to the public
     *
     * @param string $path
     * @return string|null
     */
    public function getPublicUrl($path)
    {
        return 'https://example.com/public';
    }

    /**
     * Provide downloadable url that is restricted to granted users
     *
     * @param string $path
     * @return string|null
     */
    public function getProtectedUrl($path)
    {
        return 'https://example.com/protected';
    }
}