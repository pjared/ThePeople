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

# Uncommenting Event Service Provider
For some reason, this broke the automatic sending of a verify email upon registration. I fixed this by changing the vendor files for illuminate, "SendEmailVerificationNotification" to the following.

<?php

namespace Illuminate\Auth\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class SendEmailVerificationNotification
{
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        if ($event->user instanceof MustVerifyEmail && ! $event->user->hasVerifiedEmail()) {
            $event->user->notify(new VerifyEmail);
        }
    }
}
