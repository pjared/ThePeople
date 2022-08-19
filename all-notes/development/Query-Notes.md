# Queries in the App
I thought it would be good to mark where queries are being called. Navigation will be easier when trying to find reasoning for why some pages are slow

# Ballot List

## Wire
[Ballot List](../app/Http/Livewire/Ballot/BallotList.php)
### Calls
- ballot::all
    - Might need to make this a lazy load in the future since I need to load relationships
        - https://laravel.com/docs/9.x/eloquent-relationships#lazy-eager-loading
        - https://laravel.com/docs/9.x/eloquent#chunking-using-lazy-collections
### Relationships
*** Eager Loaded ***
- Location: `name`, and `state`
- Office: `name`

*** WithCount ***
- Candidates: Counts the # of showing candidates to display the ballot

## Ballot Show
[Show Ballot](../app/Http/Livewire/Ballot/ShowBallot.php)
This needs to be a static page in order to do better SEO

### Relationships
*** Eager Loaded ***
- Location: `name`, and `state`
- Office: `name`
- Candidates :: Candidates who currently have "Show"

## Profile
[Candidate Profile](../app/Http/Livewire/Candidate/Profile.php)
*** Eager Loaded ***
- ballot 
    - Location: `name`, and `state`
    - Office: `name`
- events
- required_stances 
- stances 
- promises 
- videos 
- previous_positions
