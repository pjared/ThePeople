<?php

namespace App\Filament\Resources\GroupApplicationResource\Pages;

use App\Filament\Resources\GroupApplicationResource;
use App\Models\GroupOrganizer;
use App\Models\PoliticalGroup;
use App\Models\User;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Log;

class EditGroupApplication extends EditRecord
{
    protected static string $resource = GroupApplicationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        //Check to see if the user has an existing group (This means users cannot have more than one)
        if(!is_null(GroupOrganizer::firstWhere('user_id', $this->data['user_id']))) {
            return;
        }

        //Check to see that the group app has actually been accepted
        if($this->data['status'] != 'accepted') {
            return;
        }
        //Assign them groupOrganizer role
        $user = User::find($this->data['user_id']);
        $user->assignRole('organizerAdmin');

        //Create the party
        Log::info('Creating the political group');
        $group = new PoliticalGroup();
        $group->name = $this->data['name'];
        $group->contact_email = $this->data['email'];
        $group->description = $this->data['description'];
        $group->save();

        //Add them to group organizer pivot table
        $organizer = new GroupOrganizer();
        $organizer->user_id = $this->data['user_id'];
        $organizer->political_group_id = $group->id;
        $organizer->save;
    }
}
