<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProjectSeed::class);
        $this->call(RoleSeed::class);
        $this->call(WorkTypeSeed::class);
        $this->call(TimeEntrySeed::class);
        $this->call(UserSeed::class);
    }
}
