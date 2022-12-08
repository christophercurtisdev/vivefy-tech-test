<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Board;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Board::factory()->create(['name' => 'Design and Discovery']);
        Board::factory()->create(['name' => 'Devlopment']);
        Board::factory()->create(['name' => 'UAT']);
        Board::factory()->create(['name' => 'Deployment']);
    }
}
