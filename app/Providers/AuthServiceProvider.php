<?php

namespace App\Providers;

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

        // staffに許可
        Gate::define('user-admin', function ($user) {
          return ($user->role < 10);
        });
        // staffに許可
        Gate::define('user-staff', function ($user) {
          return ($user->role < 20);
        });
        // parentに許可
        Gate::define('user-parent', function ($user) {
          return ($user->role < 30);
        });
        // studentに許可
        Gate::define('user-student', function ($user) {
          return ($user->role < 40);
        });
  
    }
}
