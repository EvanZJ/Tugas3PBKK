<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\pasien;
use App\Models\dokter;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Article::factory(10)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Photography',
            'slug' => 'photography'
        ]);
        Pasien::create([
            'name' => 'HELSA NESTA DHAIFULLAH',
            'slug' => 'helsa-nesta-dhaifullah'
        ]);
        Pasien::create([
            'name' => 'HANIIF AHMAD JAUHARI',
            'slug' => 'haniif-ahmad-jauhari'
        ]);
        Pasien::create([
            'name' => 'FLORENTINO BENEDICTUS',
            'slug' => 'florentino-benedictus'
        ]);
        Dokter::create([
            'name' => 'FIAN AWAMIRY MAULANA',
            'slug' => 'fian-awamiry-maulana'
        ]);
        Dokter::create([
            'name' => 'ELSHE ERVIANA ANGELY',
            'slug' => 'elshe-erviana-angely'
        ]);
        Dokter::create([
            'name' => 'ANAK AGUNG YATESTHA PARWATA',
            'slug' => 'anak-agung-yatestha-parwata'
        ]);
        \App\Models\RekamMedis::factory(10)->create();
    }
}
