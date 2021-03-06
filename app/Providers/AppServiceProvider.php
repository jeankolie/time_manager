<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\{Departement, Matiere, Annee, Etudiant, Salle,Personnel};

class AppServiceProvider extends ServiceProvider
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
        View::share('dep', Departement::count());
        View::share('mat', Matiere::count());
        View::share('an', Annee::count());
        View::share('etu', Etudiant::count());
        View::share('sal', Salle::count());
        View::share('per', Personnel::count());

        config(['app.name' => 'Time manager']);
       /* config([
            'mail.host' =>'time-manager.prestigroupgn.com',
            'mail.port' => 465,
            'mail.username' => 'emplois@time-manager.prestigroupgn.com',
            'mail.password' => 'JeanKolie',
            'mail.encryption' => 'tls'
        ]);*/
    }
}
