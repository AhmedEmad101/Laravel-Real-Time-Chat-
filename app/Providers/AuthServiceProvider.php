<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
//use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
       // Gate::define('UserDelete',fn(User $user)=>$user->IsAdmin());
       Gate::define('UserDelete', function () {
        return true; // Static condition
    });
    Gate::define('update-post', function ($user, $profile) {
        return $user->id === $profile->OwnerID;
    });
    }
}
