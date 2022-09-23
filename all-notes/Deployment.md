Copy the CSS and JS files

scp -r public/build/ forge@104.237.135.91:~/whatsinyourballot.com/public/

make sure to run php artisan optimize after deploying

- Need to run fresh migration and seed (candidate and RC change)
- Can transfer the data with table viewer instead of running seeder
- need to run the sitemap generator again

