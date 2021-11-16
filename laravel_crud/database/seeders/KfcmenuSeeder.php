<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KfcmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
          
            'topic' => '10-piece bucket',
            'description' => '7 wings, 3 tenders, 1 mais, 1 cola',
            'categorie' => '€7,99',
            
        ]);
    }
}