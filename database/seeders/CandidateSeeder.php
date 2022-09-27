<?php

namespace Database\Seeders;

use App\Models\CandidateApplication;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CandidateSeeder extends Seeder
{
    private $names = [
        "Lord Macbeth",
        "Gandalf",
        "Cal Trask",
        "Cthulhu"
    ];

    /**
     * Run the candidates seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->names as $i => $name) {
            $user = User::create([
                'name' => $name,
                'email' => $name . '@gmail.com',
                'password' => Hash::make('password'),
                'profile_photo_path' => 'profile-photos/' . $i + 1  . '.jpg',
            ]);
            //Assign them to the candidate role
            $user->assignRole('candidate');
            $application = new CandidateApplication();
            $application->user_id = $user->id;
            $application->name = $user->name;
            $application->dob = Carbon::now()->subYear(rand(10,100));
            $application->email = str_replace(' ', '', $user->name) . '@gmail.com';
            $application->phone_number = '1234567891';
            $application->office_name = 'Governer';
            $application->state = 'Utah';
            $application->location = 'District 12';
            $application->status = 'accepted';
            $application->save();

            $parties = ['Democrat', 'Republican', 'Bull Moose'];
            DB::table('candidates')->insert([
                'name' => $name,
                'dob' => Carbon::today()->subYear(rand(25, 55)),
                'signup_date' => Carbon::today()->subDays(rand(0, 365)),
                'bio' => "",
                'party_name' => $parties[rand(0,2)],
                'user_id' => $user->id,
                'state' => 'Utah',
                'contact_email' => "pjared@gmail.com",
                'slug' => str_replace(' ', '-', $name),

                'ballot_id' => 3,
                'show' => true,
            ]);
        }

        DB::table('candidates')->insert([
            'name' => "Jared Pacheco",
            'dob' => Carbon::today()->subYear(rand(25, 55)),
            'signup_date' => Carbon::today()->subDays(rand(0, 365)),
            'bio' => "Hello, my name is Jared Pacheco. I am the CEO of ComnRep, LLC. I am currently creating a webiste that will show a direct comparison of candidates on the ballots that will appear when you go to vote. To start my business, I am doing this in Utah County but specifically focusing on the Provo/Orem Area. This includes the elections of U.S. House 3, Utah House 57,58,60-62 and the US Senate seat. I hope that my site will provide useful information for the public to feel informed about their vote. Thanks for taking a read!",
            'party_name' => 'Club Jared',
            'user_id' => 1,
            'state' => 'Utah',
            'contact_email' => "pjared@gmail.com",
            'slug' => 'Jared-Pacheco',

            'ballot_id' => 2,
            'show' => true,
        ]);
        User::find(1)->assignRole('candidate');
    }
}
