<?php

namespace Database\Seeders;

use App\Models\divisions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class divisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $division = new divisions();
        $division->name = 'AFC East';
        $division->superbowl_titles = 11;
        $division->save();

        $division = new divisions();
        $division->name = 'AFC North';
        $division->superbowl_titles = 9;
        $division->save();

        $division = new divisions();
        $division->name = 'AFC South';
        $division->superbowl_titles = 4;
        $division->save();

        $division = new divisions();
        $division->name = 'AFC West';
        $division->superbowl_titles = 8;
        $division->save();

        $division = new divisions();
        $division->name = 'NFC East';
        $division->superbowl_titles = 13;
        $division->save();

        $division = new divisions();
        $division->name = 'NFC North';
        $division->superbowl_titles = 13;
        $division->save();

        $division = new divisions();
        $division->name = 'NFC South';
        $division->superbowl_titles = 1;
        $division->save();

        $division = new divisions();
        $division->name = 'NFC West';
        $division->superbowl_titles = 7;
        $division->save();
    }
}
