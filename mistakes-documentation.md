# Mistake documentation
I'm going to record all of the mistakes that I make from this point on (5/22/22) so that I can search in this file first, and then go to stack overflow for help

## Tests
Here is going to be my list of mistakes that i've made while testing
### New test did not run with make test - Solved
The class for the test needs to end with the word "test"

Changed: Rename the class `BallotControllerTests` to `BallotControllerTest`, removing the "s" at the end of the class name

## HTTP Errors

### 419 Page Expired - Solved
When submitting a form, make sure to include the CSRF token

Changed: Added @csrf to the line under declaring the form

## Images

### Image wasn't working after computer restart - Solved
After a computer restart, the images were broken

Fix: ran `php artisan storage:link` in the terminal

## SVGs

### Multiple of same SVG in page - Not Fixed
When using the same SVG over and over again, SVG breaks

What I tried: 
- I gave all of the SVG's unique IDS
- I gave the x, y, and d values within <rect> and <path> unique values, made them dissapear

Fix: Needed just change the CSS since it was set to ID's. I added a class and made CSS work with that

Occurences:
1. Patient 0: I was trying to do the checkboxes for the ballot view (ballot.page), SVG kept breaking
2. 
