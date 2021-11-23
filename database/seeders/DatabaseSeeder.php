<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $seeders = app()->environment('production')
            ? $this->seedersProduction()
            : $this->seedersDevelopment();

        $this->call($seeders);
    }

    /**
     * @return string[]
     */
    private function seedersProduction(): array
    {
        return [
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ];
    }

    /**
     * @return string[]
     */
    private function seedersDevelopment(): array
    {

        return [
            PermissionSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ScheduleSeeder::class,
            AirConditionerSeeder::class,
            LaboratorySeeder::class,
            LaboratoryAccessSeeder::class
        ];
    }
}
