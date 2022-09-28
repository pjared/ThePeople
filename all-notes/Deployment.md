Copy the CSS and JS files

scp -r public/build/ forge@104.237.135.91:~/whatsinyourballot.com/public/

make sure to run php artisan optimize after deploying

scp -r public/build/ forge@104.237.135.91:~/whatsinyourballot.com/public/

scp -r storage/app/analytics/ forge@104.237.135.91:~/whatsinyourballot.com/storage/app/analytics/

- Push to prod, Re seed database

- Ensure that analytics is working
    - https://github.com/spatie/laravel-analytics
