<?php

namespace App\Providers;

use App\Models\User;
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

        //
        Gate::before(function (User $user) {
            if($user ->is_admin){
                return true;
            }
        });
        Gate::define('is_student', function (User $user){
//            return $post->user()->is($user);
            if($user ->is_student){
                return false;
            }
        });
        Gate::define('is_student_true', function (User $user){
//            return $post->user()->is($user);
            if($user ->is_student){
                return true;
            }
        });
    }
}
