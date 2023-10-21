<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Projectype;

class ProjectType extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Projectype::create([
	        ['name' => 'All', 'Status' => 1],
	        ['name' => 'website', 'Status' => 1],
	        ['name' => 'Software', 'Status' => 1],
	        ['name' => 'Design', 'Status' => 1],
	    ]);
    }
}
