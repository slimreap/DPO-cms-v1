<?php

namespace App\Providers;

use App\Models\Hero;
use App\Models\User;
use App\Models\Video;
use App\Models\About_us;
use App\Models\Articles;
use App\Models\Processes;
use App\Models\Navigation;
use App\Policies\HeroPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Models\Downloadables;
use App\Policies\VideoPolicy;
use Filament\Facades\Filament;
use App\Policies\ProcessPolicy;
use App\Policies\About_usPolicy;
use App\Policies\ArticlesPolicy;
use App\Policies\NavigationPolicy;
use App\Policies\PermissionPolicy;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Policies\DownloadablesPolicy;
use Filament\Navigation\UserMenuItem;
use Filament\Navigation\NavigationItem;
use Spatie\Permission\Models\Permission;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Role::class => RolePolicy::class,
        Permission::class => PermissionPolicy::class,
        Processes::class => ProcessPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    // function only admin have access to this user menu item

    public function boot()
    {
        $this->registerPolicies();

        ResetPassword::createUrlUsing(function ($user, string $token) {

            return 'http://privacy.wmsu.edu.ph/admin/password/reset/'.$token.'?email='.urlencode($user->email);
        });


        
        Filament::serving(function () {
            // Using Laravel Mix
            Filament::registerTheme(
                mix('css/filament-custom.css'),
            );
        });
            Filament::serving(function () {

                if(Auth::user())
                {
                    if (Auth::user()->role->name == 'editor' || Auth::user()->role->name == 'admin')
                    {
                        Filament::registerNavigationItems([
                            NavigationItem::make('Editorpage')
                                ->url(route('editorlandingpage'), shouldOpenInNewTab: true)
                                ->icon('heroicon-s-pencil')
                                ->activeIcon('heroicon-s-pencil')
                               
                        ]);
                    }

                }
            });
        


        // // Implicitly grant "Super Admin" role all permissions
        // // This works in the app by using gate-related functions like auth()->user->can() and @can()
        // Gate::before(function ($user, $ability) {
        //     return $user->hasRole('admin') ? true : null;
        // });
    }

}
