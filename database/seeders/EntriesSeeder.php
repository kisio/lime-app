<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EntriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //make HTTP request to publicapis
        $response = Http::get('https://api.publicapis.org/entries');
        // $entries = $response->json();
        $entries = $response->json()['entries'];
        // divide the entries into equal parts using chunk
        $chunks = array_chunk($entries, count($entries) / 3);


    }
}
