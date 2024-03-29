# HANDY FUCNTIONS
clean:
	php artisan cache:clear
	php artisan view:clear
	php artisan route:clear
	composer dump-autoload
	

## Quick-create classes

### Tests
test-unit: # make test-class name=
	php artisan make:test $(name) --unit

test-feature: # make test-class name=
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

test-one:
	php artisan test --filter $(name)

######## COMPUTER SETUP #########
install:
	npm install
	composer install
	php artisan key:generate

db:
	sail php artisan migrate:fresh --seed