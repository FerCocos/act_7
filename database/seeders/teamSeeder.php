<?php

namespace Database\Seeders;

use App\Models\team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class teamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $team_name = new team();
        $team_name->name = 'Buffalo Bills';
        $team_name->city = 'Buffalo';
        $team_name->titles = 0;
        $team_name->logo = 'https://upload.wikimedia.org/wikipedia/en/7/77/Buffalo_Bills_logo.svg';
        $team_name->save();

        $team_name = new team();
        $team_name->name = 'Miami Dolphins';
        $team_name->city = 'Miami';
        $team_name->titles = 2;
        $team_name->logo = 'https://upload.wikimedia.org/wikipedia/en/3/37/Miami_Dolphins_logo.svg';
        $team_name->save();

        $team_name = new team();
        $team_name->name = 'New England Patriots';
        $team_name->city = 'Foxborough';
        $team_name->titles = 6;
        $team_name->logo = 'https://upload.wikimedia.org/wikipedia/en/b/b9/New_England_Patriots_logo.svg';
        $team_name->save();

        $team_name = new team();
        $team_name->name = 'New York Jets';
        $team_name->city = 'East Rutherford';
        $team_name->titles = 1;
        $team_name->logo = 'https://upload.wikimedia.org/wikipedia/en/3/32/New_York_Jets_logo.svg';
        $team_name->save();
    }
}
