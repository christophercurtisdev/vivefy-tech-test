<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lane;

class LaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lane::factory(4)->create(['board_id' => 1]);
        Lane::factory(4)->create(['board_id' => 2]);
        Lane::factory(4)->create(['board_id' => 3]);
        Lane::factory(4)->create(['board_id' => 4]);
    }
}
