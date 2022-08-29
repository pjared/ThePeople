Copy the CSS and JS files

scp -r build/ forge@104.237.135.91:~/whatsinyourballot.com/public/

make sure to run php artisan optimize after deploying


# Redis notes:
- Had to uncomment redis service prov. from app.php
- Changed environment vars
    -CACHE_DRIVER=redis
        SESSION_DRIVER=redis
        QUEUE_DRIVER=sync
        QUEUE_CONNECTION=redis
- Added ENV vars
    - REDIS_HOST=redis
        REDIS_PASSWORD=""
        REDIS_PORT=6379s

# Meilisearch notes
- Add to .env
SCOUT_DRIVER=meilisearch
MEILISEARCH_HOST=http://127.0.0.1:7700
MEILISEARCH_KEY=masterKey
- Need to create a Master API key
    - https://docs.meilisearch.com/learn/security/master_api_keys.html#protecting-a-meilisearch-instance
- Create other API keys after that

- After importing current models, comment out the queue false and uncomment redis connection
