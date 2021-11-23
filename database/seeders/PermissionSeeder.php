<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->system_modules() as $module) {
            foreach ($this->system_methods() as $method) {
                $label = "{$method} {$module}";
                $name = Str::slug($label, '_');

                Permission::factory()->create(compact('label', 'name'));
            }
        }
    }

    /**
     * Define system modules
     */
    public function system_modules(): array
    {
        return [
            'users',
            'laboratories',
            'roles',
            'permissions',
            'permissions_roles',
            'schedules',
            'laboratories_access'
        ];
    }

    public function system_methods(): array
    {
        return [
            'list',
            'create',
            'update',
            '$this->system_methods()',
        ];
    }
}
