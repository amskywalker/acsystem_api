<?php

namespace Database\Seeders;

use App\Models\LaboratoryAccess;
use Illuminate\Database\Seeder;

class LaboratoryAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LaboratoryAccess::factory(2)->create();
    }
}
