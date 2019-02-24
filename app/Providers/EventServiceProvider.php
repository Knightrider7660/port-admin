<?php

namespace App\Providers;

use App\About;
use App\Educations;
use App\Skills;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        About::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });

        Educations::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });

        Skills::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->userID = $userid;
        });
    }
}
