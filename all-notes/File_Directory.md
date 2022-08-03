# All Pages

## Welcome
[Welcome](../resources/views/welcome.blade.php)
|
|__[Ballot List](../app/Http/Livewire/BallotList.php)
    - Ballot list is being kept because I would like to sort ballots for that state when a user clicks on a specific ballot

- When I create a personal user experience, need to make /home page customized for the user
    - This is also why i'm keeping the home controller for now

### Associated Files
[Ballot List Wire](../app/Http/Livewire/Ballot/BallotList.php)

## Ballot
I could probably change this view up so that if a user is not logged in, they will not see the wire.
[Ballot Main View](../resources/views/ballot/show.blade.php)
|
|__[Ballot List (Wire)](../app/Http/Livewire/BallotList.php)
|
|__[Ballot (Wire View)](../resources/views/livewire/ballot/show.blade.php)
    - Where user votes is handled

### Associated Files
[Ballot Controller](../app/Http/Controllers/BallotController.php)
[Ballot List Wire](../app/Http/Livewire/Ballot/BallotList.php)
[Ballot Show Wire](../app/Http/Livewire/Ballot/Show.php)

## Candidate Profile (Viewing)
[Profile](../resources/views/livewire/candidate/profile.blade.php)
|
|   _[Flags](../resources/views/livewire/flag.blade.php)
|__|
   |_[Flag - Signup Prompt](../resources/views/icons/flag.blade.php)

### Associated Files
[Candidate Controller](../app/Http/Controllers/CandidateController.php)
[Flag - Wire](../app/Http/Livewire/Flag.php)


## Candidate Dashboard
In order to get to this page:
1. You must have the candidate role
2. Navigate to your profile and click candidate dashboard

All of these files use the [Candidate Aside](../resources/views/candidate/aside.blade.php)

[Preview](../resources/views/livewire/candidate/preview.blade.php)
|
|__[Profile Page](../resources/views/livewire/candidate/profile.blade.php)

[Basic Information](../resources/views/livewire/candidate/edit/edit-info.blade.php)

[Bio](../app/Http/Livewire/Candidate/Edit/EditBio.php)
|
|__[Bio Component](../resources/views/candidate/component/bio.blade.php)

[Stances](../resources/views/livewire/candidate/edit/edit-stances.blade.php)
|
|__[Opinions Blade](../resources/views/candidate/edit/opinions.blade.php)
|    |
|    |__[Stances Edit](../resources/views/livewire/candidate/edit/stances.blade.php)
|        |
|        |__[New Stance Modal](../resources/views/modals/new-stance.blade.php)
|
|__[Stances Component](../resources/views/candidate/component/stances.blade.php)

[Promises](../resources/views/livewire/candidate/edit/edit-promises.blade.php)
|
|__[Promises Component](../resources/views/candidate/component/promises.blade.php)

[Videos](../resources/views/livewire/candidate/edit/edit-videos.blade.php)
|
|__[Video Component](../resources/views/candidate/component/videos.blade.php)

[Positions](../resources/views/livewire/candidate/edit/edit-positions.blade.php)
|
|__[Positions Component](../resources/views/candidate/component/positions.blade.php)

### Additional files
[Preview Wire](../app/Http/Livewire/Candidate/Preview.php)
[Profile Wire](../app/Http/Livewire/Candidate/Edit/Profile.php)

[Info Wire](../app/Http/Livewire/Candidate/Edit/EditInfo.php)

[Bio Wire](../app/Http/Livewire/Candidate/Edit/EditBio.php)

[Edit Stances Wire](../app/Http/Livewire/Candidate/Edit/EditStances.php)
[Stances Wire](../app/Http/Livewire/Candidate/Edit/Stances.php)

[Promises Wire](../app/Http/Livewire/Candidate/Edit/EditPromises.php)

[Videos Wire](../app/Http/Livewire/Candidate/Edit/EditVideos.php)

[Positions Wire](../app/Http/Livewire/Candidate/Edit/EditPositions.php)

## Create Ballot (Admin)
[Create Ballot View](../resources/views/admin/create-ballot.blade.php)
|
|__[Create Ballot Wire View](../resources/views/livewire/Admin/create-ballot.blade.php)
    |
    |__[Ballot Admin Component](../resources/views/admin/components/ballot-list.blade.php)

### Additional Files
[Create Ballot Wire](../app/Http/Livewire/Admin/CreateBallot.php)

## Candidate Ballot Assignment (Admin)
[Ballot Assignment View](../resources/views/admin/assign-candidates.blade.php)
|
|__[Assignment Wire View](../resources/views/livewire/Admin/assign-candidates.blade.php)
    |
    |__[Ballot Admin Component](../resources/views/admin/components/ballot-list.blade.php)

### Additional Files
[Ballot Assignment Wire](../app/Http/Livewire/Admin/AssignCandidates.php)

## Create Opinions (Admin)
[Create Opinions View](../resources/views/admin/create-opinions.blade.php)
|   -Need to List opinions here
|__[Create Opinions Wire View](../resources/views/livewire/Admin/create-opinions.blade.php)

### Additional Files
[Create Opinions Wire](../app/Http/Livewire/Admin/CreateOpinions.php)
|__[Test](../tests/Feature/Livewire/Admin/CreateOpinionsTest.php)

## Edit Opinions and Types (Admin)
[Edit Opinions View](../resources/views/admin/edit-opinions.blade.php)
|
|__[Edit Opinions Wire View](../resources/views/livewire/Admin/edit-opinions.blade.php)

### Additional Files
[Edit Opinions Wire](../app/Http/Livewire/Admin/EditBallotOpinions.php)
|__[Test](../tests/Feature/Livewire/Admin/EditBallotOpinionsTest.php)

## Approve Candidates (Admin)
[Approve Candidates View](../resources/views/admin/approve-candidates.blade.php)
|
|__[Approve Candidates Wire View](../resources/views/livewire/Admin/approve-candidates.blade.php)

### Additional Files
[Approve Candidates Wire](../app/Http/Livewire/Admin/ApproveCandidates.php)

## Candidate Permalinks (Admin)
[Permalinks View](../resources/views/admin/permalinks.blade.php)
|
|__[Edit Links Wire View](../resources/views/livewire/Admin/edit-permalinks.blade.php)

### Additional Files
[Edit Perma Links Wire](../app/Http/Livewire/Admin/EditPermalinks.php)


# Controversial Opinions 
### Files
- [CreateOpinions](../app/Http/Livewire/Admin/CreateOpinions.php)
- [View](../resources/views/livewire/Admin/create-opinions.blade.php)
- [Migration](../database/migrations/2022_05_25_034203_create_controversial_opinions_table.php)

- [Profile](../app/Http/Livewire/Candidate/Edit/Profile.php)
- [Candidate Model](../app/Models/Candidate.php)
- [Edit Opinions Wire](../app/Http/Livewire/Admin/EditBallotOpinions.php)
- [Seeder](../database/seeders/ControversialOpinionsSeeder.php)

- [Candidate Stance](../app/Models/CandidateStance.php)
