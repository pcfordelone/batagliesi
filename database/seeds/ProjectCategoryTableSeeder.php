<?php

use Illuminate\Database\Seeder;

class ProjectCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \FRD\Entities\ProjectCategory::truncate();

        factory(\FRD\Entities\ProjectCategory::class)->create([
            'name' => 'Arquitetura',
            'slug' => 'arquitetura',
            'status' => 1,
            'description' => '',
            'color' => '#d2d500'
        ]);

        factory(\FRD\Entities\ProjectCategory::class)->create([
            'name' => 'Sistemas Ambientais',
            'slug' => 'sistemas-ambientais',
            'status' => 1,
            'description' => '',
            'color' => '#052349'
        ]);

        factory(\FRD\Entities\ProjectCategory::class)->create([
            'name' => 'Design',
            'slug' => 'design',
            'status' => 1,
            'description' => '',
            'color' => '#b7222a'
        ]);
    }
}
