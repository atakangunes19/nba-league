<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clubs = Array();

        $clubs = [
            [
                'group_name' => 'east',
                'name' => '76ears',
                'short_name' => '76ears',
                'power' => 85
            ],
            [
                'group_name' => 'east',
                'name' => 'Buck',
                'short_name' => 'bucks',
                'power' => 74
            ],
            [
                'group_name' => 'east',
                'name' => 'Bulls',
                'short_name' => 'bulls',
                'power' => 65
            ],
            [
                'group_name' => 'east',
                'name' => 'Cavaliers',
                'short_name' => 'cavaliers',
                'power' => 89
            ],
            [
                'group_name' => 'east',
                'name' => 'Celtics',
                'short_name' => 'celtics',
                'power' => 69
            ],
            [
                'group_name' => 'east',
                'name' => 'Hawks',
                'short_name' => 'hawks',
                'power' => 77
            ],
            [
                'group_name' => 'east',
                'name' => 'Heat',
                'short_name' => 'heat',
                'power' => 67
            ],
            [
                'group_name' => 'east',
                'name' => 'Hornets',
                'short_name' => 'hornets',
                'power' => 62
            ],
            [
                'group_name' => 'east',
                'name' => 'Knicks',
                'short_name' => 'knicks',
                'power' => 73
            ],
            [
                'group_name' => 'east',
                'name' => 'Magic',
                'short_name' => 'magic',
                'power' => 80
            ],
            [
                'group_name' => 'east',
                'name' => 'Nets',
                'short_name' => 'nets',
                'power' => 54
            ],
            [
                'group_name' => 'east',
                'name' => 'Pacers',
                'short_name' => 'pacers',
                'power' => 91
            ],
            [
                'group_name' => 'east',
                'name' => 'Pistons',
                'short_name' => 'pistons',
                'power' => 62
            ],
            [
                'group_name' => 'east',
                'name' => 'Raptors',
                'short_name' => 'raptors',
                'power' => 78
            ],
            [
                'group_name' => 'east',
                'name' => 'Wizards',
                'short_name' => 'wizards',
                'power' => 87
            ],
            [
                'group_name' => 'west',
                'name' => 'Clippers',
                'short_name' => 'clippers',
                'power' => 74
            ],
            [
                'group_name' => 'west',
                'name' => 'Grizzlies',
                'short_name' => 'grizzlies',
                'power' => 70
            ],
            [
                'group_name' => 'west',
                'name' => 'Jazz',
                'short_name' => 'jazz',
                'power' => 80
            ],
            [
                'group_name' => 'west',
                'name' => 'Kings',
                'short_name' => 'kings',
                'power' => 88
            ],
            [
                'group_name' => 'west',
                'name' => 'Lakers',
                'short_name' => 'lakers',
                'power' => 74
            ],
            [
                'group_name' => 'west',
                'name' => 'Mavericks',
                'short_name' => 'mavericks',
                'power' => 73
            ],
            [
                'group_name' => 'west',
                'name' => 'Nuggests',
                'short_name' => 'nuggests',
                'power' => 68
            ],
            [
                'group_name' => 'west',
                'name' => 'Pelicans',
                'short_name' => 'pelicans',
                'power' => 92
            ],
            [
                'group_name' => 'west',
                'name' => 'Rockets',
                'short_name' => 'rockets',
                'power' => 70
            ],
            [
                'group_name' => 'west',
                'name' => 'Spurs',
                'short_name' => 'spurs',
                'power' => 83
            ],
            [
                'group_name' => 'west',
                'name' => 'Suns',
                'short_name' => 'suns',
                'power' => 88
            ],
            [
                'group_name' => 'west',
                'name' => 'Thunder',
                'short_name' => 'thunder',
                'power' => 76
            ],
            [
                'group_name' => 'west',
                'name' => 'Timberwolves',
                'short_name' => 'timberwolves',
                'power' => 58
            ],
            [
                'group_name' => 'west',
                'name' => 'Trail',
                'short_name' => 'trail',
                'power' => 93
            ],
            [
                'group_name' => 'west',
                'name' => 'Warriors',
                'short_name' => 'warriors',
                'power' => 89
            ]
        ];

        DB::table('clubs')->insert($clubs);

    }
}
