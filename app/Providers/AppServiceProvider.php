<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {    
        view()->composer('*', function ($view) {   

                $data = [
                    'religion'=>[
                        'Catholic',
                        'Non Catholic',
                        'Muslim' 
                    ], 
                    'attendanceStatus'=>[
                        'in',
                        'out'
                    ],
                    'college' =>[ 
                        'COC',
                        'CON',
                        'CECS',
                        'CED',
                        'CAS',
                        'CBA',
                        'CHRM',
                        'CBT',
                        'SENIOR HIG',
                    ], 
                    'year' => [
                        1=>'First Year',
                        2=>'Second Year',
                        3=>'Third Year',
                        4=>'Fourth  Year' 
                    ],
                    'position' => [
                        'Administrator',
                        'Faculty',
                        'Staff',
                        'Dean'
                    ]
                ];  
                $view->with(compact('data')); 
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
