<?php

namespace App\Providers;

use App\Actions\Jetstream\AddTeamMember;
use App\Actions\Jetstream\CreateTeam;
use App\Actions\Jetstream\DeleteTeam;
use App\Actions\Jetstream\DeleteUser;
use App\Actions\Jetstream\InviteTeamMember;
use App\Actions\Jetstream\RemoveTeamMember;
use App\Actions\Jetstream\UpdateTeamName;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::createTeamsUsing(CreateTeam::class);
        Jetstream::updateTeamNamesUsing(UpdateTeamName::class);
        Jetstream::addTeamMembersUsing(AddTeamMember::class);
        Jetstream::inviteTeamMembersUsing(InviteTeamMember::class);
        Jetstream::removeTeamMembersUsing(RemoveTeamMember::class);
        Jetstream::deleteTeamsUsing(DeleteTeam::class);
        Jetstream::deleteUsersUsing(DeleteUser::class);

        // register new LoginResponse
        Fortify::loginView(function () {
            if (session('link')) {
                $myPath = session('link');
                $loginPath = url('/login');
                $previous = url()->previous();

                if ($previous = $loginPath) {
                    session(['link' => $myPath]);
                } else {
                    session(['link' => $previous]);
                }
            } else {
                session(['link' => url()->previous()]);
            }
            return view('auth.login');
        });

        $this->app->singleton(
            \Laravel\Fortify\Contracts\LoginResponse::class,
            \App\Http\Responses\LoginResponse::class
        );

        // register new TwofactorLoginResponse
        $this->app->singleton(
            \Laravel\Fortify\Contracts\TwoFactorLoginResponse::class,
            \App\Http\Responses\LoginResponse::class
        );
    }

    /**
     * Configure the roles and permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::role('admin', 'Administrator', [
            'create',
            'read',
            'update',
            'delete',
        ])->description('Administrator users can perform any action.');

        //TODO: Finish Teams implementations for social media team
        Jetstream::role('candidate', 'Candidate', [
            'read',
            'create',
            'update',
        ])->description('Candidate users have the ability to read, create, and update their profiles');
    }
}
