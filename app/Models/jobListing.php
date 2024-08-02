<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class jobListing extends Model
{
    use HasFactory;
//    protected $fillable=['jobTitle','jobSalary','employer_id'];
    protected $guarded=[];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);

    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);

    }
}
