# Mistake documentation
I'm going to record all of the mistakes that I make from this point on (5/22/22) so that I can search in this file first, and then go to stack overflow for help

## Tests
Here is going to be my list of mistakes that i've made while testing
### New test did not run with make test
The class for the test needs to end with the word "test"

Changed: Rename the class `BallotControllerTests` to `BallotControllerTest`, removing the "s" at the end of the class name

## HTTP Errors

### 419 Page Expired
When submitting a form, make sure to include the CSRF token

Changed: Added @csrf to the line under declaring the form