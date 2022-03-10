<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use App\Policies\PostPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        // Post::class => PostPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('index-post', [PostPolicy::class, 'viewAny']);
        Gate::define('view-post', [PostPolicy::class, 'view']);
        Gate::define('create-post', [PostPolicy::class, 'create']);
        Gate::define('update-post', [PostPolicy::class, 'update']);
        Gate::define('delete-post', [PostPolicy::class, 'delete']);
        Gate::define('publish-post', [PostPolicy::class, 'publish']);



        Gate::define('access-control', function (User $user) {
            return $user->hasRole('Admin');
        });
        Gate::define('user-control', function (User $user) {
            return $user->hasPermissionTo('user control');
        });
        Gate::define('file-manager', function (User $user) {
            return $user->hasPermissionTo('file manager');
        });
        Gate::define('see-subscribers', function (User $user) {
            return $user->hasPermissionTo('see subscribers');
        });
    }
}
