# Explore
Projet alternatif au stage - Laravel

COMMANDES POUR INSTALLATION:

// laravel
composer create-project --prefer-dist laravel/laravel {dest};
cd {dest};
composer require laravelcollective/html;
composer require barryvdh/laravel-debugbar --dev;
composer require laravel/ui;
php artisan ui vue --auth;

// blog
composer require "webdevetc/blogetc";
-- go edit the database configuration in the .env file
php artisan vendor:publish --provider="WebDevEtc\BlogEtc\BlogEtcServiceProvider";
php artisan vendor:publish --tag=laravel-fulltext;
php artisan migrate;
mkdir public/blog_images;

// add this to /app/User.php
--------------------------------
 /**
     * Required for the WebDevEtc\BlogEtc package.
     * Enter your own logic (e.g. if ($this->id === 1) to
     *   enable this user to be able to add/edit blog posts
     *
     * @return bool - true = they can edit / manage blog posts,
     *        false = they have no access to the blog admin panel
     */
    public function canManageBlogEtcPosts()
    {
        // Enter the logic needed for your app.
        // Maybe you can just hardcode in a user id that you
        //   know is always an admin ID?

        if (       $this->id === 1
             && $this->email === "your_admin_user@your_site.com"
           ){

           // return true so this user CAN edit/post/delete
           // blog posts (and post any HTML/JS)

           return true;
        }

        // otherwise return false, so they have no access
        // to the admin panel (but can still view posts)

        return false;
    }
---------------------------------

// make some files writable
chmod -R o+w storage;
chmod o+w bootstrap/cache;
chmod o+w public/blog_images;
