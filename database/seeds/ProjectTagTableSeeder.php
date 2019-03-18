<?php

use Illuminate\Database\Seeder;

class ProjectTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \FRD\Entities\ProjectTag::truncate();

        factory(\FRD\Entities\User::class)->create([
            'name' => 'Arquitetura',
            'slug' => 'arquitetura',
        ]);

        factory(\FRD\Entities\User::class)->create([
            'name' => 'Varejo e Serviços',
            'slug' => 'varejo-e-servicos',
        ]);

        factory(\FRD\Entities\User::class)->create([
            'name' => 'Urbanismo',
            'slug' => 'urbanismo',
        ]);

        factory(\FRD\Entities\User::class)->create([
            'name' => 'Interiores',
            'slug' => 'interiores',
        ]);

        factory(\FRD\Entities\User::class)->create([
            'name' => 'Ideias e Concursos',
            'slug' => 'ideias-e-concursos',
        ]);

        factory(\FRD\Entities\User::class)->create([
            'name' => 'Educacional',
            'slug' => 'educacional',
        ]);

        factory(\FRD\Entities\User::class)->create([
            'name' => 'Design Objeto',
            'slug' => 'design-objeto',
        ]);

        factory(\FRD\Entities\User::class)->create([
            'name' => 'Design Gráfico',
            'slug' => 'design-grafico',
        ]);

        factory(\FRD\Entities\User::class)->create([
            'name' => 'Sinalização',
            'slug' => 'sinalizacao',
        ]);
    }
}
