<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hub;

class HubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hub::factory()->count(10)->create();
    }
}
