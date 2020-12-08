<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('administrador', function($user){
            return $user->tipo=='administrador';
        });

        Gate::define('show-persona', function($user, $persona){
            return $user->id===$persona->user_id;
        });
        Gate::define('edit-persona', function($user, $persona){
            return $user->id===$persona->user_id;
        });
        Gate::define('show-direccion', function($user, $direccion){
            return $user->id===$direccion->user_id;
        });
        Gate::define('edit-direccion', function($user, $direccion){
            return $user->id===$direccion->user_id;
        });
    }
}
