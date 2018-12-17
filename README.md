# silverstripe-cloudinary

## Important notes

**This module is not actively supported at the moment as I do not use it in production.** Contributions are welcome to 
get it into a working state.

**This module has not been tested at all - do not use in production!** Currently it is capable of uploading 
assets, but does not correctly read them back after uploading (missing the double file extension, need to investigate 
what the underlying `enl/flysystem-cloudinary` module is doing).

**Note:** Installing this module and defining the env vars below will force SilverStripe to use the Cloudinary API to 
store all files. **Any locally stored files will not be accessible** (though their database records will remain).

## Installation
* Add the following to your `composer.json`:
  ```
  "repositories": [
    {
      "type": "vcs",
      "url": "git@github.com:madmatt/silverstripe-cloudinary.git"
    }
  ],
  ```
* `composer require madmatt/silverstripe-cloudinary`
* This module requires the following environment variables to be defined, either in .env or via server environment vars:

  | Env var name            | Description                                   |
  |-------------------------|-----------------------------------------------|
  | `CLOUDINARY_CLOUD_NAME` | The cloud name from the Cloudinary dashboard. |
  | `CLOUDINARY_API_KEY`    | Your Cloudinary API key.                      |
  | `CLOUDINARY_API_SECRET` | Your Cloudinary API secret.                   |

   Defining at least the `CLOUDINARY_CLOUD_NAME` env var is enough for the module to activate, however it will not work 
   unless all env vars above are defined.