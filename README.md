<p># laravelcomingsoon</p>
<h2>Laravel coming soon package</h2>
<p>The package allows you to add a simple coming soon page as the landing page of the site.<br />This is intended to work fast.<br />The package displays the name of the project from the .env file.(APP_NAME)</p>
<p>Preview can be seen <a href="https://github.com/vivdub/laravelcomingsoon/tree/master/src">here</a>.</p>
<p>To change the main image you can modify the file at public/vendor/vivdub/commingsoon/images/ directory.</p>
<p>&nbsp;</p>
<p><strong>How to install</strong></p>
<p>1. composer require vivdub/commingsoon<br />2. php artisan vendor:publish --tag=public --force<br />3. Got to routes/web.php and comment the main / root that returns the welcome page.</p>
<p><br />The package is using: <a href="https://github.com/creativetimofficial/coming-sssoon-page">https://github.com/creativetimofficial/coming-sssoon-page</a> theme, which at the time of usage is under MIT License, thus free to use for commercial purpose.</p>