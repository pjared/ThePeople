# My notes for jetstream

This is the first time I am using a full stack application and I plan on keeping notes to help me navigate this shit.

## Dashboard
Logging in will automatically direct you to the dashboard, so here I can
- Have a seperate page for users to pull up elections near them

## Location-Input
- The querystring "except" parameter not working, bandaid fix in view

## Teams
JetStream teams docs are found at https://jetstream.laravel.com/2.x/features/teams.html#introduction

An important file for me is the [Team Policy File](/app/Policies/TeamPolicy.php) , here is where the settings for jetstream is. This file puts restrictions/capabilities on teams.

## Roles
The roles are defined in the [Service Provider File](app/Providers/JetstreamServiceProvider.php)

## Redirection after logging in
I pretty much Copy/Pasted a lot of stuff from here, so I still need to make sure that 2FA works on PROD. If it doesn't, just revert the changes that i've done
https://laracasts.com/discuss/channels/laravel/redirect-to-intended-url-jetstream-fortify
