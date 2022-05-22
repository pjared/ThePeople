######## HANDY FUCNTIONS #########

serve:
	php artisan serve

test-class: # make test-class name=
	php artisan make:test $(name) --pest

test:
	php artisan test

######## COMPUTER SETUP #########
install:
	npm install
	composer install
	php artisan key:generate

clean:
	php artisan cache:clear`
	php artisan view:clear
	composer dump-autoload

db:
	touch cmanager.sqlite
	php artisan migrate:fresh --seed
	