# Caching the Ballot
[Show Ballot Wire](../../app/Http/Livewire/Ballot/ShowBallot.php) - Doesn't work
[Show Ballow View](../../resources/views/livewire/ballot/show-ballot.blade.php)

## Updating
- The cache is updated when:
    - A candidate on the ballot hits 'show' on their profile
    - A Running Candidate is changed to 'show'
    - Any change is made to the ballot

The code that will be called to update the ballot cache is 
```
Cache::forget('ballot-' . $ballot->slug);
Cache::rememberForever('ballot-' . $ballot->slug, function () use ($ballot) {
            return $ballot->load('location:id,name,state',
                                    'office:id,name',
                                    'candidates',
                                    'candidates.candidate:id,slug,profile_photo_path,name');
        });
```

This code is exected in the [Update Ballot Cache Job](../../app/Jobs/UpdateBallotCache.php)

### Candidate hits 'show'
This happens in the [Profile Preview](../../app/Http/Livewire/Candidate/Preview.php), ~line 33

### Running Candidate is showing
This happens in the [RC Resource](../../app/Filament/Resources/RunningCandidatesResource.php), ~line 54

### Ballot has been changed
[Ballot Resource](../../app/Filament/Resources/BallotResource.php), ~line 57

## Data that is retrieved on page

- 'voting_date'
- 'slug'
- 'candidates
- 'location'
    - 'name'
    - 'state'
- 'office.name'
- 'running_candidates'
    - 'id'
    - 'candidate'
        - 'slug'
        - 'profile_photo_url'
        - 'name'

