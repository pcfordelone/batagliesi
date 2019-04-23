<?php

use Illuminate\Database\Seeder;

class BlogPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \FRD\Entities\BlogPost::truncate();

        factory(\FRD\Entities\BlogPost::class)->create([
            'title' => 'Postagem Teste',
            'slug' => 'postagem-teste',
            'status' => '1',
            'featured' => '1',
            'author' => 'Batagliesi Arquitetos + Designers',
            'description' => 'Postagem teste.',
            'html_content' => '<p>Postagem Teste</p>',
            'blog_category_id' => '1'
        ]);

        factory(\FRD\Entities\BlogPost::class, 10)->create();
    }
}
