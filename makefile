# HANDY FUCNTIONS

serve:
	php artisan serve

clean:
	php artisan cache:clear
	php artisan view:clear
	php artisan route:clear
	composer dump-autoload
	

## Quick-create classes
test-class: # make test-class name=
	php artisan make:test $(name)

test-dusk: # make test-dusk name=
	php artisan dusk:make $(name)

## Testing

feature-test:
	php artisan test --testsuite=Feature --stop-on-failure

unit-test:
	php artisan test --testsuite=Unit --stop-on-failure

test:
	php artisan test

######## COMPUTER SETUP #########
install:
	npm install
	composer install
	php artisan key:generate

db:
	touch /tmp/cmanager.sqlite
	php artisan migrate:fresh --seed