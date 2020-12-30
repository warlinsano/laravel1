<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\curso;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        User::factory(10)->create();
        curso::factory(50)->create();

        // $this->call(CursoSeeder::class);

        // $curso = new curso();
        // $curso->name= "PHP";
        // $curso->description="Curso de PHP 7";
        // $curso->save();

        // $curso1 = new curso();
        // $curso1->name= "js";
        // $curso1->description="Curso de js";
        // $curso1->save();

        // $curso2 = new curso();
        // $curso2->name= "html";
        // $curso2->description="Curso de html";
        // $curso2->save();
    }
}
