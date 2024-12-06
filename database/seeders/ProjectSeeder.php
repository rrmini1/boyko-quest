<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'user_id' => 1,
                'name' => 'Project 1',
                'description' => 'Project 1 description',
            ],
            [
                'user_id' => 1,
                'name' => 'Project 2',
                'description' => 'Project 2 description',
            ],
            [
                'user_id' => 1,
                'name' => 'Project 3',
                'description' => 'Project 3 description',
            ],
            [
                'user_id' => 1,
                'name' => 'Project 4',
                'description' => 'Project 4 description',
            ],
        ];

        DB::table('projects')->insert($projects);

        Project::factory(10)->create();
    }
}
