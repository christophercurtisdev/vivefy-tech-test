<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Lane;
use App\Models\Task;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::factory(200)->create([
            'lane_id' => rand(Lane::count()),
            'owner_id' => rand(User::count())
        ])
    }
}
