<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $typesId = Type::all()->pluck('id');
        for ($i=0; $i < 30; $i++) {
        $newProject = new Project();
        $newProject->name = $faker->name();
        $newProject->title = $faker->name();
        $newProject->description = $faker->paragraph();
        $newProject->url = $faker->url();
        $newProject->start_date = $faker->date();
        $newProject->end_date = $faker->date();
        $newProject->programming_language = $faker->randomElement(['PHP', 'JavaScript', 'Python', 'Ruby', 'Java']);
        $newProject->type_id = $faker->randomElement($typesId);
        $newProject->save();

    }
    }
}
