<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Task;
use App\Models\Project;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $project = Project::first();

        Task::create([
            'name' => 'Task 1',
            'description' => 'Description for task 1',
            'project_id' => $project->id,
        ]);
    }
}
