1.  composer.phar create-project --prefer-dist laravel/laravel:^7.0 laravel7-wfm-blog

    chmod -R 777 storage

2.  php artisan make:model Models/Post --migration

    php artisan migrate

3.  php artisan make:factory PostFactory --model=Models/Post

    php artisan db:seed

4.  php artisan make:controller PostController

5.  php artisan make:controller PostController --resource --model=Models/Post
