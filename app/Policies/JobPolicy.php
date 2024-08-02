<?php

namespace App\Policies;

use App\Models\jobListing;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class JobPolicy
{
    use HandlesAuthorization;


    public function edit(User $user, jobListing $jobListing): bool
    {
        return $jobListing->employer->user()->is(Auth::user());
    }


}
