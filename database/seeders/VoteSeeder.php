<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("votes")->insert([
            'name'=>"Amougou Mariana Brenda",
            'number_candidates' => 1,
            "total_vote" => 0,
            "created_at" => now()
        ]);

        DB::table("votes")->insert([
            'name'=> "Sandji Frédérique",
            'number_candidates'=> 2,
            "total_vote" => 0,
            "created_at" => now()
        ]);

        DB::table("votes")->insert([
            'name'=> "Angue Läetitia",
            'number_candidates'=> 4,
            "total_vote" => 0,
            "created_at" => now()
        ]);

        DB::table("votes")->insert([
            'name'=> "Rosy Ndzengue",
            'number_candidates'=> 5,
            "total_vote" => 0,
            "created_at" => now()
        ]);

        DB::table("votes")->insert([
            'name'=> "Sandji Mercedes",
            'number_candidates'=> 6,
            "total_vote" => 0,
            "created_at" => now()
        ]);
    }
}
