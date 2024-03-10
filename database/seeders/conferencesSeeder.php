<?php

namespace Database\Seeders;

use App\Models\conferences;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class conferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conference = new conferences();
        $conference->name = 'AFC';
        $conference->save();

        $conference = new conferences();
        $conference->name = 'NFC';
        $conference->save();
    }
}
