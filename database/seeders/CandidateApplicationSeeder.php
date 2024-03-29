<?php

namespace Database\Seeders;

use App\Models\CandidateApplication;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CandidateApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Un-comment to test candidate application
        for($i = 1; $i < 7; $i++) {
        // for($i = 2; $i < 7; $i++) {
            $user = User::find($i);
            $application = new CandidateApplication();
            $application->user_id = $i;
            $application->name = $user->name;
            $application->dob = Carbon::now()->subYear(rand(10,100));
            $application->email = 'pjared@gmail.com';
            $application->phone_number = '1234567891';
            $application->office_name = 'Governer';
            $application->state = 'Utah';
            $application->location = 'District 12';
            if($i == 1) {
                $application->status = 'accepted';
            } else {
                $application->status = 'submitted';
            }
            $application->save();
        }
    }
}
