<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\job_listing;
use App\Models\job_tag;
use App\Models\jobListing;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\job_tagFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();
         jobListing::factory(10)->create();
         Tag::factory(10)->create();


    }
}
