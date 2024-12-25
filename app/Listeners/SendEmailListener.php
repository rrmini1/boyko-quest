<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Events\CreatedGoal;
use App\Mail\GoalMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

final class SendEmailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     */
    public function handle(CreatedGoal $event): void
    {
        $project = optional($event->goal->project);
        $user = $project->user;
        Mail::to($user)->send(new GoalMail($event->goal));
    }
}
