<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programmingLanguages = [
            "Python",
            "Java",
            "C#",
            "Ruby",
            "PHP",
            "Node.js",
            "Go",
            "Rust",
            "Swift",
            "Kotlin",
            "JavaScript",
            "TypeScript",
            "HTML",
            "CSS",
            "Sass",
            "React",
            "Vue.js",
            "Angular",
            "Elm",
            "Dart",
            "SQL",
            "MongoDB",
            "GraphQL",
            "Redis",
            "SQLite",
            "PostgreSQL",
            "MySQL",
            "MariaDB"
        ];

        foreach ($programmingLanguages as $singleProgrammingLanguage) {
            $technology = new Technology();
            $technology->name = $singleProgrammingLanguage;

            $technology->save();
        }
    }
}
