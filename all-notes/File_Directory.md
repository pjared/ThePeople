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
[Ballot](../resources/views/ballot/show.blade.php)
|
|__[Ballot List](../app/Http/Livewire/BallotList.php)
|
|__[Ballot (Wire)](../resources/views/livewire/ballot/show.blade.php)
    - Where user votes is handled

### Associated Files
[Ballot Controller](../app/Http/Controllers/BallotController.php)
[Ballot List Wire](../app/Http/Livewire/Ballot/BallotList.php)
[Ballot Show Wire](../app/Http/Livewire/Ballot/Show.php)P

## Candidate Profile (Viewing)
[Profile](../resources/views/livewire/candidate/profile.blade.php)
|
|   _[Flags](../resources/views/livewire/flag.blade.php)
|__|
   |_[Flag - Signup Prompt](../resources/views/icons/flag.blade.php)

### Associated Files
[Candidate Controller](../app/Http/Controllers/CandidateController.php)
[Flag - Wire](../app/Http/Livewire/Flag.php)


## Candidate Profile (Editing)
In order to get to this page:
1. You must have the candidate role
2. Navigate to your profile and click edit profile button

[Profile](../resources/views/livewire/candidate/edit/profile.blade.php)
|   - Bio and info are updated on this page
|
|__[Promises Edit](../resources/views/livewire/candidate/edit/promises.blade.php)
|   |
|   |__[Add Promise Modal](../resources/views/modals/new-promise.blade.php)
|
|
|__[Positions Edit](../resources/views/livewire/candidate/edit/positions.blade.php)
|   |
|   |_[Add Position Modal](../resources/views/modals/new-position.blade.php)
|
|
|__[Opinions Blade](../resources/views/candidate/edit/opinions.blade.php)
    |
    |__[Stances Edit](../resources/views/livewire/candidate/edit/stances.blade.php)
        |
        |__[New Stance Modal](../resources/views/modals/new-stance.blade.php)
### Additional files
[Profile Wire](../app/Http/Livewire/Candidate/Edit/Profile.php)
[Promises Wire](../app/Http/Livewire/Candidate/Edit/Promises.php)
[Positions Wire](../app/Http/Livewire/Candidate/Edit/Positions.php)
[Stances Wire](../app/Http/Livewire/Candidate/Edit/Stances.php)

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
[Edit Opinions Wire](../app/Http/Livewire/Admin/EditOpinions.php)
|__[Test](../tests/Feature/Livewire/Admin/EditOpinionsTest.php)

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
- [Edit Opinions Wire](../app/Http/Livewire/Admin/EditOpinions.php)
- [Seeder](../database/seeders/ControversialOpinionsSeeder.php)

- [Candidate Stance](../app/Models/CandidateStance.php)