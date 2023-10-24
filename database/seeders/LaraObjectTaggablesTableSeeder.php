<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LaraObjectTaggablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lara_object_taggables')->delete();
        
        \DB::table('lara_object_taggables')->insert(array (
            0 => 
            array (
                'id' => 2,
                'tag_id' => 20,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'tag_id' => 22,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 2,
            ),
            2 => 
            array (
                'id' => 4,
                'tag_id' => 23,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 3,
            ),
            3 => 
            array (
                'id' => 5,
                'tag_id' => 20,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 5,
            ),
            4 => 
            array (
                'id' => 6,
                'tag_id' => 22,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 6,
            ),
            5 => 
            array (
                'id' => 7,
                'tag_id' => 23,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 7,
            ),
            6 => 
            array (
                'id' => 8,
                'tag_id' => 21,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 4,
            ),
            7 => 
            array (
                'id' => 9,
                'tag_id' => 21,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 8,
            ),
            8 => 
            array (
                'id' => 17,
                'tag_id' => 42,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 2,
            ),
            9 => 
            array (
                'id' => 18,
                'tag_id' => 42,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 1,
            ),
            10 => 
            array (
                'id' => 25,
                'tag_id' => 11,
                'entity_type' => 'Lara\\Common\\Models\\Slider',
                'entity_id' => 7,
            ),
            11 => 
            array (
                'id' => 26,
                'tag_id' => 1899,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 244,
            ),
            12 => 
            array (
                'id' => 27,
                'tag_id' => 1899,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 245,
            ),
            13 => 
            array (
                'id' => 28,
                'tag_id' => 1899,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 246,
            ),
            14 => 
            array (
                'id' => 29,
                'tag_id' => 1897,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 247,
            ),
            15 => 
            array (
                'id' => 39,
                'tag_id' => 1914,
                'entity_type' => 'Eve\\Models\\Event',
                'entity_id' => 98,
            ),
            16 => 
            array (
                'id' => 40,
                'tag_id' => 1916,
                'entity_type' => 'Lara\\Common\\Models\\Slider',
                'entity_id' => 200,
            ),
            17 => 
            array (
                'id' => 41,
                'tag_id' => 1916,
                'entity_type' => 'Lara\\Common\\Models\\Slider',
                'entity_id' => 201,
            ),
            18 => 
            array (
                'id' => 42,
                'tag_id' => 1916,
                'entity_type' => 'Lara\\Common\\Models\\Slider',
                'entity_id' => 202,
            ),
            19 => 
            array (
                'id' => 43,
                'tag_id' => 1916,
                'entity_type' => 'Lara\\Common\\Models\\Slider',
                'entity_id' => 203,
            ),
            20 => 
            array (
                'id' => 45,
                'tag_id' => 1921,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 386,
            ),
            21 => 
            array (
                'id' => 46,
                'tag_id' => 1922,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 387,
            ),
            22 => 
            array (
                'id' => 47,
                'tag_id' => 1924,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 388,
            ),
            23 => 
            array (
                'id' => 48,
                'tag_id' => 1920,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 389,
            ),
            24 => 
            array (
                'id' => 49,
                'tag_id' => 1921,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 390,
            ),
            25 => 
            array (
                'id' => 50,
                'tag_id' => 1922,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 391,
            ),
            26 => 
            array (
                'id' => 51,
                'tag_id' => 1924,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 392,
            ),
            27 => 
            array (
                'id' => 53,
                'tag_id' => 1936,
                'entity_type' => 'Eve\\Models\\Story',
                'entity_id' => 1,
            ),
            28 => 
            array (
                'id' => 56,
                'tag_id' => 42,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 3,
            ),
            29 => 
            array (
                'id' => 65,
                'tag_id' => 1966,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 254,
            ),
            30 => 
            array (
                'id' => 66,
                'tag_id' => 1939,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 254,
            ),
            31 => 
            array (
                'id' => 67,
                'tag_id' => 11,
                'entity_type' => 'Lara\\Common\\Models\\Slider',
                'entity_id' => 204,
            ),
            32 => 
            array (
                'id' => 68,
                'tag_id' => 11,
                'entity_type' => 'Lara\\Common\\Models\\Slider',
                'entity_id' => 205,
            ),
            33 => 
            array (
                'id' => 69,
                'tag_id' => 42,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 257,
            ),
            34 => 
            array (
                'id' => 70,
                'tag_id' => 1938,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 257,
            ),
            35 => 
            array (
                'id' => 71,
                'tag_id' => 1939,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 258,
            ),
            36 => 
            array (
                'id' => 72,
                'tag_id' => 42,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 258,
            ),
            37 => 
            array (
                'id' => 73,
                'tag_id' => 42,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 259,
            ),
            38 => 
            array (
                'id' => 74,
                'tag_id' => 1969,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 259,
            ),
            39 => 
            array (
                'id' => 75,
                'tag_id' => 42,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 260,
            ),
            40 => 
            array (
                'id' => 76,
                'tag_id' => 1938,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 260,
            ),
            41 => 
            array (
                'id' => 77,
                'tag_id' => 1970,
                'entity_type' => 'Lara\\Common\\Models\\Slider',
                'entity_id' => 206,
            ),
            42 => 
            array (
                'id' => 78,
                'tag_id' => 1970,
                'entity_type' => 'Lara\\Common\\Models\\Slider',
                'entity_id' => 207,
            ),
            43 => 
            array (
                'id' => 79,
                'tag_id' => 1973,
                'entity_type' => 'Eve\\Models\\Testimonial',
                'entity_id' => 1,
            ),
            44 => 
            array (
                'id' => 80,
                'tag_id' => 1973,
                'entity_type' => 'Eve\\Models\\Testimonial',
                'entity_id' => 2,
            ),
            45 => 
            array (
                'id' => 81,
                'tag_id' => 1973,
                'entity_type' => 'Eve\\Models\\Testimonial',
                'entity_id' => 3,
            ),
            46 => 
            array (
                'id' => 82,
                'tag_id' => 1974,
                'entity_type' => 'Eve\\Models\\Testimonial',
                'entity_id' => 4,
            ),
            47 => 
            array (
                'id' => 83,
                'tag_id' => 1974,
                'entity_type' => 'Eve\\Models\\Testimonial',
                'entity_id' => 5,
            ),
            48 => 
            array (
                'id' => 84,
                'tag_id' => 1974,
                'entity_type' => 'Eve\\Models\\Testimonial',
                'entity_id' => 6,
            ),
            49 => 
            array (
                'id' => 85,
                'tag_id' => 1975,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 261,
            ),
            50 => 
            array (
                'id' => 86,
                'tag_id' => 1976,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 262,
            ),
            51 => 
            array (
                'id' => 87,
                'tag_id' => 1977,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 263,
            ),
            52 => 
            array (
                'id' => 88,
                'tag_id' => 1976,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 264,
            ),
            53 => 
            array (
                'id' => 89,
                'tag_id' => 1939,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 265,
            ),
            54 => 
            array (
                'id' => 90,
                'tag_id' => 1979,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 266,
            ),
            55 => 
            array (
                'id' => 91,
                'tag_id' => 1977,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 267,
            ),
            56 => 
            array (
                'id' => 96,
                'tag_id' => 1981,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 264,
            ),
            57 => 
            array (
                'id' => 97,
                'tag_id' => 1981,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 263,
            ),
            58 => 
            array (
                'id' => 98,
                'tag_id' => 1981,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 265,
            ),
            59 => 
            array (
                'id' => 99,
                'tag_id' => 1981,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 266,
            ),
            60 => 
            array (
                'id' => 100,
                'tag_id' => 1981,
                'entity_type' => 'Eve\\Models\\Blog',
                'entity_id' => 267,
            ),
            61 => 
            array (
                'id' => 101,
                'tag_id' => 1955,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 2,
            ),
            62 => 
            array (
                'id' => 102,
                'tag_id' => 1955,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 1,
            ),
            63 => 
            array (
                'id' => 103,
                'tag_id' => 1956,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 3,
            ),
            64 => 
            array (
                'id' => 104,
                'tag_id' => 1982,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 2,
            ),
            65 => 
            array (
                'id' => 105,
                'tag_id' => 1955,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 6,
            ),
            66 => 
            array (
                'id' => 106,
                'tag_id' => 1955,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 7,
            ),
            67 => 
            array (
                'id' => 107,
                'tag_id' => 1982,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 7,
            ),
            68 => 
            array (
                'id' => 108,
                'tag_id' => 1955,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 8,
            ),
            69 => 
            array (
                'id' => 109,
                'tag_id' => 1983,
                'entity_type' => 'Eve\\Models\\Doc',
                'entity_id' => 8,
            ),
            70 => 
            array (
                'id' => 110,
                'tag_id' => 1986,
                'entity_type' => 'Eve\\Models\\Service',
                'entity_id' => 1,
            ),
            71 => 
            array (
                'id' => 111,
                'tag_id' => 1987,
                'entity_type' => 'Eve\\Models\\Service',
                'entity_id' => 2,
            ),
            72 => 
            array (
                'id' => 112,
                'tag_id' => 1988,
                'entity_type' => 'Eve\\Models\\Service',
                'entity_id' => 3,
            ),
            73 => 
            array (
                'id' => 113,
                'tag_id' => 1989,
                'entity_type' => 'Eve\\Models\\Service',
                'entity_id' => 1,
            ),
            74 => 
            array (
                'id' => 114,
                'tag_id' => 1991,
                'entity_type' => 'Eve\\Models\\Service',
                'entity_id' => 2,
            ),
            75 => 
            array (
                'id' => 115,
                'tag_id' => 1992,
                'entity_type' => 'Eve\\Models\\Service',
                'entity_id' => 3,
            ),
            76 => 
            array (
                'id' => 123,
                'tag_id' => 2016,
                'entity_type' => 'Eve\\Models\\Event',
                'entity_id' => 2,
            ),
            77 => 
            array (
                'id' => 124,
                'tag_id' => 2016,
                'entity_type' => 'Eve\\Models\\Event',
                'entity_id' => 3,
            ),
            78 => 
            array (
                'id' => 125,
                'tag_id' => 2017,
                'entity_type' => 'Eve\\Models\\Event',
                'entity_id' => 100,
            ),
            79 => 
            array (
                'id' => 126,
                'tag_id' => 20,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 393,
            ),
            80 => 
            array (
                'id' => 127,
                'tag_id' => 20,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 394,
            ),
            81 => 
            array (
                'id' => 128,
                'tag_id' => 20,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 395,
            ),
            82 => 
            array (
                'id' => 129,
                'tag_id' => 21,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 396,
            ),
            83 => 
            array (
                'id' => 130,
                'tag_id' => 21,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 397,
            ),
            84 => 
            array (
                'id' => 131,
                'tag_id' => 22,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 398,
            ),
            85 => 
            array (
                'id' => 132,
                'tag_id' => 22,
                'entity_type' => 'Eve\\Models\\Portfolio',
                'entity_id' => 399,
            ),
            86 => 
            array (
                'id' => 133,
                'tag_id' => 2021,
                'entity_type' => 'Eve\\Models\\Gallery',
                'entity_id' => 2,
            ),
            87 => 
            array (
                'id' => 134,
                'tag_id' => 2024,
                'entity_type' => 'Eve\\Models\\Gallery',
                'entity_id' => 1,
            ),
            88 => 
            array (
                'id' => 135,
                'tag_id' => 2,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 446,
            ),
            89 => 
            array (
                'id' => 137,
                'tag_id' => 2,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 447,
            ),
            90 => 
            array (
                'id' => 139,
                'tag_id' => 5,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 448,
            ),
            91 => 
            array (
                'id' => 140,
                'tag_id' => 2025,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 449,
            ),
            92 => 
            array (
                'id' => 141,
                'tag_id' => 5,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 450,
            ),
            93 => 
            array (
                'id' => 142,
                'tag_id' => 5,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 451,
            ),
            94 => 
            array (
                'id' => 143,
                'tag_id' => 1962,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 451,
            ),
            95 => 
            array (
                'id' => 144,
                'tag_id' => 12,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 452,
            ),
            96 => 
            array (
                'id' => 145,
                'tag_id' => 2026,
                'entity_type' => 'Eve\\Models\\Team',
                'entity_id' => 453,
            ),
            97 => 
            array (
                'id' => 147,
                'tag_id' => 45,
                'entity_type' => 'Lara\\Common\\Models\\Slider',
                'entity_id' => 209,
            ),
        ));
        
        
    }
}