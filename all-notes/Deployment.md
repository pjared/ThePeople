Copy the CSS and JS files

scp -r build/ forge@104.237.135.91:~/whatsinyourballot.com/public/

make sure to run php artisan optimize after deploying

- Need to run fresh migration and seed (candidate and RC change)
- Can transfer the data with table viewer instead of running seeder
- need to run the sitemap generator again

# Static generation
- Run php artisan export to generate static pages

# Meilisearch notes
- Add to .env
SCOUT_DRIVER=meilisearch
MEILISEARCH_HOST=http://127.0.0.1:7700
MEILISEARCH_KEY=masterKey
- Need to create a Master API key
    - https://docs.meilisearch.com/learn/security/master_api_keys.html#protecting-a-meilisearch-instance
- Create other API keys after that

- After importing current models, comment out the queue false and uncomment redis connection
