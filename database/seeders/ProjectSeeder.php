<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\User;


class ProjectSeeder extends Seeder
{
    public function run()
    {
        $user = User::first();

        Project::create([
            'name' => 'Project 1',
            'description' => 'Description for project 1',
            'user_id' => $user->id,
        ]);
    }
}
