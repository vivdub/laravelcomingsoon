# laravelcomingsoon
Laravel coming soon package

The package allows you to add a simple coming soon page as the landing page of the site.
This is intended to work fast.
The package displays the name of the project from the .env file.(APP_NAME)

To change the main image you can modify the file at public/vendor/vivdub/commingsoon/images/ directory.

How to install

1. composer require vivdub/commingsoon
2. php artisan vendor:publish --tag=public --force
3. Got to routes/web.php and comment the main / root that returns the welcome page.


The package is using: https://github.com/creativetimofficial/coming-sssoon-page theme, which at the time of usage is under MIT License, thus free to use for commercial purpose.
