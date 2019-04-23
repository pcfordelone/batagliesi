<?php

use Illuminate\Database\Seeder;

class BlogCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \FRD\Entities\BlogCategory::truncate();

        factory(\FRD\Entities\BlogCategory::class)->create([
            'name' => 'Novidades',
            'slug' => 'novidades',
            'status' => '1',
            'description' => 'Categoria dedicada a novidades da Batagliesi Arquitetos + Designers.'
        ]);

        factory(\FRD\Entities\BlogCategory::class)->create([
            'name' => 'Premiações',
            'slug' => 'premiacoes',
            'status' => '1',
            'description' => 'Categoria dedicada a premiações da Batagliesi Arquitetos + Designers.'
        ]);
    }
}
