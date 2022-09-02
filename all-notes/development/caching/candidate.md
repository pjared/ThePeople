# Caching the Candidate's Info

## Updating
- The cache is updated when:
    - A candidate hits 'show' on their profile
    - A candidate makes a change to their profile and is showing

The code that will be called to update the ballot cache is 
```
Cache::forget('candidate-' . $candidate->slug);
Cache::rememberForever('candidate-' . $candidate->slug, function () use ($candidate) {
            return $candidate->load('ballot', 'ballot.office:id,name', 'ballot.location:id,state,name',
                                'events', 'required_stances', 'stances', 'promises', 'videos', 'previous_positions');
        });
```

This code is exected in the [Update Candidate Cache Job](../../app/Jobs/UpdateCandidateCache.php)

## Data retrieved on Page
The following data is retreived on the [Candidates Profile](../../app/Http/Livewire/Candidate/Profile.php)
