<?php

namespace Database\Seeders;

use App\Models\Ortu;
use Illuminate\Database\Seeder;

class OrtuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ortu::factory(5)->create();
    }
}
