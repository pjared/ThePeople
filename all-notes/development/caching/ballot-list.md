# Caching the Ballot List
For now, the caching of this falls under the same rules as [Ballot Caching](ballot.md). 
If things get too slow, I think it would be best to cache the list on certain conditions (I couldn't justify making additional db queries to get the count of running candidates).
- Running candidates count changes from 0 to 1, or vice versa
- A change has been made to the ballot name

## Updating
The following code is executed to update the cache of the ballot list
```
Cache::forget('ballots');
        Cache::rememberForever('ballots', function () {
            return Ballot::with('office', 'location')->withCount('candidates')->get();
        });
```
